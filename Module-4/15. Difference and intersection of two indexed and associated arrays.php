<?php
// একাধিক অ্যারের মধ্যে কমন ভ্যালুগুলাকে বের করে আনার জন্য array_intersect()
$vocab1 = ['a'=>'a for apple','b'=> 'b for bananna','c'=>'c for cat'];
$vocab2 = ['a1'=>'a for apple','d'=> 'd for deer','h'=>'h for horse'];

$common_vocab1 = array_intersect($vocab1,$vocab2);

print_r($common_vocab1);

// এই ফাংশনের অসুবিধা এটি শুধু ভ্যালু একি কিনা তা চেক করে , ভ্যালুগুলার কী একি কিনা সেটা চেক করে না
// এইখানে কী মূলত প্রথম অ্যারের কী যা পায় তাই নেয়, দ্বিতীয় অ্যাারের কী চ্যাক করে না


// আমরা কী সহ মিললো কিনা চেক করতে চাইলে array_intersect_assoc ইউজ করব
$common_vocab2 = array_intersect_assoc($vocab1,$vocab2);

    
print_r($common_vocab2);
// এইখানে কী এবং ভ্যালু ২টাই ম্যাচ করে এমন একটী উপাদান ও নেই বলে এম্পি এরে রিটার্ন হবে



// অ্যারের ডিফারেন্স বের করার জন্য array_diff()
$diff = array_diff($vocab1,$vocab2); // প্রথম অ্যারের যে ভ্যালুগুলা দ্বিতীয় অ্যারেতে নাই সেগুলা রিটার্ন করে
print_r($diff);
$diff = array_diff_assoc($vocab1,$vocab2); // প্রথম অ্যারের যে ভ্যালুগুলা দ্বিতীয় অ্যারেতে নাই সেগুলা রিটার্ন করে , কী সব চেক করে
print_r($diff);


?>