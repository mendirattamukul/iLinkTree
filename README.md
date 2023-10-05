Step1:Create database ilink
Step2:Run php artisan migrate:fresh command to migtae all the tables to your databse
Step3:Run php artisan db:seed command
Step4:Navigate to app->databse->factories->categoryFactory.php
Remove comment from line number 20 and 21
  // 'name' => "instagram",
 // 'image'=>"\images\instagram.png",
and comment line number 22 and 23
 'name' => "facebook",
'image'=>"\images\facebook.png"

Step5:Run php artisan db:seed command
step6:Run npm run dev command
step7:Run php artisan serve command
