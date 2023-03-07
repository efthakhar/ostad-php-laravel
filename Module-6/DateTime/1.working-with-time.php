<?php



/* 
Unix TimeStamp: ১৯৭০ সাল রাত ১২টা থেকে এখন পর্যন্ত কত 
                 সেকেন্ড অতিবাহিত হয়েছে 
                 তার হিসাব কে Unix Time Stamp বলে
Unix Epoch : ১৯৭০ সাল রাত ১২টা সময়টা Unix Epoch হিসেবে বিবেচিত                   
*/




// php তে Unix Time Stamp বের করাঃ
echo "\n======= time() =========\n";

echo "unix time of now: ". $t1 = time()."\n";

echo "passed days from unix epoch ".$passed_days = ($t1/3600)/24 ."\n";

echo "passed year from unix epoch ".$passed_days/365 ."\n";





// php তে মাইক্রো টাইম বের করা
echo "\n======= microtime() ========\n";

echo 'current microtime ' . $mt1 = microtime(true)."\n";

for ($i=0; $i < 5000; $i++) { 
   1+2;
}
// sleep(2);
echo 'current microtime ' . $mt2 = microtime(true)."\n";

echo 'diff ' . $mt2 - $mt1 = microtime(true)."\n";




?>