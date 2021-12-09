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
     * todo
     *
     * @param string $studyName
     * @param array $fileContents
     * @return string
     */
    public function dummyMethods($studyName, $fileContents)
    {
        try {

        } catch (Exception $exception) {
            Log::error("Exception occurred: ".$exception);
        }
    }
}