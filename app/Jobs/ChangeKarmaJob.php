<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Bots\SlackBot;
use App\User;

class ChangeKarmaJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $type;
    private $message_id;

    protected $table = 'karma_jobs';

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($type, $recipient, $action)
    {
        $this->type = $type;
        $this->message_id = $event_data['client_msg_id'];
        $this->payload = $recipient;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

      switch ($this->type) {
        case 'user':
          if (env('DEBUG_MODE')) {
            Log::debug('Calling user handler.');
          }

          Log::debug(print_r($this->job->payload(), true));

          break;

        case 'thing':
          if (env('DEBUG_MODE')) {
            Log::debug('Calling thing handler.');
          }

          Log::debug(print_r($this->job->payload(), true));

          break;

        default:
          break;
      }

    }
}
