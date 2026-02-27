<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Job;

class TranslateJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $jobListing)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void // [handle = تنفيذ المهمة] [void = لا ترجع أي قيمة] [logger = تسجيل رسالة في سجل النظام] [Translating ' . $this->jobListing->title . ' to Arabic. = الرسالة التي سيتم تسجيلها في سجل النظام] [ $this->jobListing->title = جلب عنوان الوظيفة من الخاصية العامة التي تم تعريفها في الكونستركتور]
    {
        logger('Translating ' . $this->jobListing->title . ' to Arabic.'); // [logger = تسجيل رسالة في سجل النظام] [Translating ' . $this->jobListing->title . ' to Arabic. = الرسالة التي سيتم تسجيلها في سجل النظام] [ $this->jobListing->title = جلب عنوان الوظيفة من الخاصية العامة التي تم تعريفها في الكونستركتور]
    }
}
