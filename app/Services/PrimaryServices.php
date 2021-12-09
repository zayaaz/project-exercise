<?php
/**
 * Contains PrimaryServices class
 *
 * @package App\Services
 * @author  Zaya Erdenepil <zaya.erdenepil2017@gmail.com>
 */
namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use App\Models\Poll;

/**
 * PrimaryServices
 */
class PrimaryServices
{
    /**
     * Create a new PrimaryServices.
     */
    public function __construct()
    {
    }

    /**
     * Destruct a PrimaryServices.
     */
    public function __destruct()
    {
    }

    /**
     * Create poll
     *
     * @param string $pollTitle
     * @return string
     */
    public function createPoll($pollTitle)
    {
        try {
            $poll = new Poll();
            $poll->title($pollTitle);
            $poll->save();
        } catch (Exception $exception) {
            Log::error("Exception occurred: ".$exception);
        }
    }
}