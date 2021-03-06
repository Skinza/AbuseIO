<?php

namespace AbuseIO\Jobs;

use AbuseIO\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use Validator;
use Lang;

class EventsValidate extends Job implements SelfHandling
{
    public $events;

    /**
     * Create a new command instance.
     * @return void
     */
    public function __construct($events)
    {
        $this->events = $events;
    }

    /**
     * Execute the command.
     * @return array
     */
    public function handle()
    {
        if (empty($this->events)) {
            return $this->failed("Empty resultset cannot be validated");
        }

        foreach ($this->events as $event) {
            /**
             *  TODO - implement a lot of validation here
             *  TODO - Requires some extending validation rules
             *  http://laravel.com/docs/4.2/validation#custom-validation-rules
             */

            // Check valid IP
            $validator = Validator::make(
                [
                    'source' => $event['source'],
                    'ip' => $event['ip'],
                    'domain' => $event['domain'],
                    'uri' => $event['uri'],
                    'class' => $event['class'],
                    'type' => $event['type'],
                    'timestamp' => $event['timestamp'],
                    'information' => $event['information'],
                ],
                [
                    'source' => 'required',
                    'ip' => 'required|ip',
                    'domain' => 'required',
                    'uri' => 'required',
                    'class' => 'required',
                    'type' => 'required',
                    'timestamp' => 'required',
                    'information' => 'required',
                ]
            );

            if ($validator->fails()) {
                $messages = $validator->messages();

                $message = '';
                foreach ($messages->all() as $messagePart) {
                    $message .= $messagePart;
                }
                return $this->failed($message);
            }

            // check valid domain name
            if ($event['domain'] !== false) {
            }

            // check valid URI
            if ($event['uri'] !== false) {
            }

            // check valid timestamp
            if ($event['timestamp'] === false) {
                return $this->failed('Invalid timestamp used');
            }

            // check valid Type
            $validType = false;
            foreach (Lang::get('types.type') as $typeID => $type) {
                if ($type['name'] == $event['type']) {
                    $validType = true;
                }
            }
            if ($validType !== true) {
                return $this->failed("Invalid type used: {$event['type']}");
            }

            // Check valid Class
            $validClass = false;
            foreach (Lang::get('classifications') as $classID => $class) {
                if ($class['name'] == $event['class']) {
                    $validClass = true;
                    break;
                }
            }

            if ($validClass !== true) {
                return $this->failed("Invalid classification used: {$event['class']}");
            }

            // Check if information is json encoded

            // This any failed, we call a $this->failed($message)

        }
        return $this->success('');
    }
}
