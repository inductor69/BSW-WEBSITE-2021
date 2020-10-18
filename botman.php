<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\SymfonyCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Attachments\Image;


require_once('bot_conversations.php');

$config = [
    'botman' => [
        'conversation_cache_time' => 30
    ],
];

DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

$adapter = new FilesystemAdapter();
$botman = BotManFactory::create($config, new SymfonyCache($adapter));


$botman->hears('.*hello.*', function ($bot) {
    $bot->startConversation(new OnboardingConversation);
});
$botman->hears('.*hi.*', function ($bot) {
    $bot->startConversation(new OnboardingConversation);
});
$botman->hears('.*yo.*', function ($bot) {
    $bot->startConversation(new OnboardingConversation);
});

$botman->hears('!q', function($bot) {
    
    $bot->startConversation(new Query);
    
});
$botman->hears('query', function($bot) {
    
    $bot->startConversation(new Query);
    
});

$botman->hears('!feature', function($bot) {
    
    $bot->startConversation(new FeatureRequest);
    
});





$botman->hears('Tell me about BSW', function ($bot) {
    $bot->reply('BSW “Board for Student Welfare” consists of student representatives from each hostel and a few faculty members. This board has been constituted to help the students in the hour of need. BSW gives financial help, informative sessions, counselling and looks after other modes of student welfare.');
});
$botman->hears('What is BSW\?', function ($bot) {
    $bot->reply('BSW “Board for Student Welfare” consists of student representatives from each hostel and a few faculty members. This board has been constituted to help the students in the hour of need. BSW gives financial help, informative sessions, counselling and looks after other modes of student welfare.');
});
$botman->hears('What does BSW do\?', function ($bot) {
    $bot->reply('BSW “Board for Student Welfare” consists of student representatives from each hostel and a few faculty members. This board has been constituted to help the students in the hour of need. BSW gives financial help, informative sessions, counselling and looks after other modes of student welfare.');
});

$botman->hears('What\'s up\?', function ($bot) {
    $bot->reply('The URL Bar! Oh wait, that one’s just for us chatbots.');
});
$botman->hears('Whats up\?', function ($bot) {
    $bot->reply('The URL Bar! Oh wait, that one’s just for us chatbots.');
});
$botman->hears('Whats up', function ($bot) {
    $bot->reply('The URL Bar! Oh wait, that one’s just for us chatbots.');
});

$botman->hears('!em', function ($bot) {
    $bot->reply('    
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-1000"> IIT SECURITY </a>: 11-2659-1000</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-6101"> IIT FIRE SERVICE  </a>: 11-2659-6101</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-1500"> IIT HOSPITAL </a>: 11-2659-1500</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-6666"> IIT AMBULANCE </a>: 11-2659-6666</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-1699"> FACULTY GUEST HOUSE </a>: 11-2659-1699</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-1906"> MAIN GUEST HOUSE </a>: 11-2659-1906</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-1400"> POWER SUPPLY (MAIN) </a>: 11-2659-1400</li>');
});
$botman->hears('em', function ($bot) {
    $bot->reply('    
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-1000"> IIT SECURITY </a>: 11-2659-1000</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-6101"> IIT FIRE SERVICE  </a>: 11-2659-6101</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-1500"> IIT HOSPITAL </a>: 11-2659-1500</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-6666"> IIT AMBULANCE </a>: 11-2659-6666</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-1699"> FACULTY GUEST HOUSE </a>: 11-2659-1699</li>
    <li class="list-group-item col-12 col-md-6"> <a style="color:white;" href="tel:+91-11-2659-1906"> MAIN GUEST HOUSE </a>: 11-2659-1906</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-1400"> POWER SUPPLY (MAIN) </a>: 11-2659-1400</li>');
});
$botman->hears('!em security', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-1000"> Security Control Room </a>: 11-2659-1000</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6500"> Anti Raging Helpline </a>: 11-2659-6500</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-1712"> Duty Officer </a>: 11-2659-1712</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6903"> Control Room (RCA) </a>: 11-2659-6903</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-7225"> Bharti School </a>: 11-2659-7225</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-7161"> Security Cabin (MSB) I </a>: 11-2659-7161</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6942"> Security Cabin (MSB) II</a>: 11-2659-6942</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6981"> Main Gate I </a>: 11-2659-6981</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6828"> Main Gate II </a>: 11-2659-6828</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6999"> Hostel Gate  </a>: 11-2659-6999</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6900"> Mahrauli Gate </a>: 11-2659-6900</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6969"> JNU Gate </a>: 11-2659-6969</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6849"> Adhchini Gate </a>: 11-2659-6849</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6387"> Vishwakarma Bhawan </a>: 11-2659-6387</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-1711"> Security Officer </a>: 11-2659-1711</li>
    ');
});
$botman->hears('em security', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-1000"> Security Control Room </a>: 11-2659-1000</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6500"> Anti Raging Helpline </a>: 11-2659-6500</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-1712"> Duty Officer </a>: 11-2659-1712</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6903"> Control Room (RCA) </a>: 11-2659-6903</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-7225"> Bharti School </a>: 11-2659-7225</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-7161"> Security Cabin (MSB) I </a>: 11-2659-7161</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6942"> Security Cabin (MSB) II</a>: 11-2659-6942</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6981"> Main Gate I </a>: 11-2659-6981</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6828"> Main Gate II </a>: 11-2659-6828</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6999"> Hostel Gate  </a>: 11-2659-6999</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6900"> Mahrauli Gate </a>: 11-2659-6900</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6969"> JNU Gate </a>: 11-2659-6969</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6849"> Adhchini Gate </a>: 11-2659-6849</li>
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6387"> Vishwakarma Bhawan </a>: 11-2659-6387</li>
    <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-1711"> Security Officer </a>: 11-2659-1711</li>
    ');
});
$botman->hears('!em hostels', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6911"> Aravali </a>: 11-2659-6911</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6891"> Girnar </a>: 11-2659-6891</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6825"> Himadri </a>: 11-2659-6825</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6894"> Fire Control Room Himadri </a>: 11-2659-6894</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6826"> Kailash </a>: 11-2659-6826</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6855"> Security Gate Kailash </a>: 11-2659-6855</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6915"> Karakoram</a>: 11-2659-6915</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6917"> Kumaon </a>: 11-2659-6917</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6919"> Nilgiri </a>: 11-2659-6919</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-7066"> Satpura </a>: 11-2659-7066</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6921"> Shivalik </a>: 11-2659-6921</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6899"> Udaigiri </a>: 11-2659-6899</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6923"> Vindhyachal </a>: 11-2659-6923</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-7068"> Zanskar </a>: 11-2659-7068</li>
        ');
});
$botman->hears('em hostels', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6911"> Aravali </a>: 11-2659-6911</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6891"> Girnar </a>: 11-2659-6891</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6825"> Himadri </a>: 11-2659-6825</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6894"> Fire Control Room Himadri </a>: 11-2659-6894</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6826"> Kailash </a>: 11-2659-6826</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6855"> Security Gate Kailash </a>: 11-2659-6855</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6915"> Karakoram</a>: 11-2659-6915</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6917"> Kumaon </a>: 11-2659-6917</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6919"> Nilgiri </a>: 11-2659-6919</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-7066"> Satpura </a>: 11-2659-7066</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6921"> Shivalik </a>: 11-2659-6921</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6899"> Udaigiri </a>: 11-2659-6899</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6923"> Vindhyachal </a>: 11-2659-6923</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-7068"> Zanskar </a>: 11-2659-7068</li>
        ');
});
$botman->hears('em hostel', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6911"> Aravali </a>: 11-2659-6911</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6891"> Girnar </a>: 11-2659-6891</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6825"> Himadri </a>: 11-2659-6825</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6894"> Fire Control Room Himadri </a>: 11-2659-6894</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6826"> Kailash </a>: 11-2659-6826</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6855"> Security Gate Kailash </a>: 11-2659-6855</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6915"> Karakoram</a>: 11-2659-6915</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6917"> Kumaon </a>: 11-2659-6917</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6919"> Nilgiri </a>: 11-2659-6919</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-7066"> Satpura </a>: 11-2659-7066</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6921"> Shivalik </a>: 11-2659-6921</li>
        <li class="list-group-item col-12"> <a style="color:white;" href="tel:+91-11-2659-6899"> Udaigiri </a>: 11-2659-6899</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-6923"> Vindhyachal </a>: 11-2659-6923</li>
        <li class="list-group-item col-12 "> <a style="color:white;" href="tel:+91-11-2659-7068"> Zanskar </a>: 11-2659-7068</li>
        ');
});

$botman->hears('!qp {course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'"> Click here for '.strtoupper($course).' Question Papers</a>');
});
$botman->hears('past qps {course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'"> Click here for '.strtoupper($course).' Question Papers</a>');
});
$botman->hears('qps {course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'"> Click here for '.strtoupper($course).' Question Papers</a>');
});
$botman->hears('question papers {course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'"> Click here for '.strtoupper($course).' Question Papers</a>');
});
$botman->hears('-{course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'"> Click here for '.strtoupper($course).' Question Papers</a>');
});



$botman->hears('!rep {hostel}', function ($bot, $hostel) {
    $rep = array(
        "aravali" => '                <h5 class="mt-1 mb-2"> Dipanshu Patidar</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> dkdk5122000@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 7424905782   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Prakhar Sharma</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> prakharsharma1999@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 7055051155   </button><br>            </div>
',
        "girnar" => '                <h5 class="mt-1 mb-2"> Gaurav Chauhan</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> gauravseema1411@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 6239961770   </button><br>            </div>
<h5 class="mt-1 mb-2"> Prabhpreet Singh</h5>
<button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> yash.prabhpreet@gmail.com </button><br>
<button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9915438685   </button><br>            </div>
',
        "himadri" => '                <h5 class="mt-1 mb-2"> Ichha Rathod</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> ichharathod@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9664114447   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Ishita Chawla</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> chawlaishita13@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 8375883773   </button><br>            </div>
',
        "jwalamukhi" => '                <h5 class="mt-1 mb-2"> Franklin Gari </h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> franklin02082001@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 8248563561   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Abhimanyu Singh</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> abhimanyu1867@gmail.com</button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9588354698   </button><br>            </div>
',
        "kailash" => '                <h5 class="mt-1 mb-2"> Ruchika kumari</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> kumariruchika885@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 8271812751   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Sakshi Bhandari</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> bsak2222@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9586597182   </button><br>            </div>
',
        "karakoram" => '                <h5 class="mt-1 mb-2"> Aashish Choudary</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> ...</button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span>...  </button><br>            </div>
        <h5 class="mt-1 mb-2"> Piyush Gupta</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> piyush37gupta@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9425707560   </button><br>            </div>
',
        "kumaon" => '                <h5 class="mt-1 mb-2"> Hardik Tanwar</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> tmkoc2000@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9530368472   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Mihir Kedia</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> mihirkedia1208@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 8800908227   </button><br>            </div>
',
        "nilgiri" => '                <h5 class="mt-1 mb-2"> Jatin Goel</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> goel.jatin2001@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9716338929   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Puru Arora</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> puruarora1@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 8448555978   </button><br>            </div>
',
        "satpura" => '                <h5 class="mt-1 mb-2"> Arvin Goyal </h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> arving1908@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9517649345   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Raghav Ajitsaria</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> ajitsaria.raghavr1@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 7595868183   </button><br>            </div>
',
        "shivalik" => '                <h5 class="mt-1 mb-2"> Ayush Kanodia</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> akanodia11@gmail.com</button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9451422334   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Siddhant Choudhary</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> sid2001.iitd@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9935029433   </button><br>            </div>
',
        "udaigiri" => '                <h5 class="mt-1 mb-2"> Chirag Maheshwari</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> chiragmahheshwari@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 8233957000   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Shikhar Anand</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> anandshikhar99@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 7000680741   </button><br>            </div>
',
        "vindhyachal" => '                <h5 class="mt-1 mb-2"> Gaurav Pande</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> gaurav24061999@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 7219584694   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Yash Jain</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> yash.jain.guwahati@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 9706099045   </button><br>            </div>
',
        "zanskar" => '                <h5 class="mt-1 mb-2"> Bhupender Dhaka </h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> bhupenderdhaka226@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 6377593404   </button><br>            </div>
        <h5 class="mt-1 mb-2"> Sanidhya Jain</h5>
        <button class="btn btn-primary" style="font-size:16px; " id="hostel_button"> <span class="fa fa-envelope"> </span> sanidhyaleo10@gmail.com </button><br>
        <button class="btn btn-success my-1" style="font-size:16px; " id="hostel_button"> <span class="fa fa-phone"> </span> +91 6264363313   </button><br>            </div>
',
    );
    if(isset($rep[$hostel])){
    $bot->reply(''.$rep[$hostel]);
    }
    else{
        $bot->reply('Sorry, please chack your input for errors.');
    }
});


$botman->hears('!joke', function ($bot) {

    $curl = new Curl\Curl();
    $curl->setHeader('Accept', 'text/plain');
    $curl->get('https://icanhazdadjoke.com/');

    $bot->reply($curl->response);
});
$botman->hears('joke', function ($bot) {

    $curl = new Curl\Curl();
    $curl->setHeader('Accept', 'text/plain');
    $curl->get('https://icanhazdadjoke.com/');

    $bot->reply($curl->response);
});
$botman->hears('tell me a joke', function ($bot) {

    $curl = new Curl\Curl();
    $curl->setHeader('Accept', 'text/plain');
    $curl->get('https://icanhazdadjoke.com/');

    $bot->reply($curl->response);
});


$botman->fallback(function($bot) {
    $bot->reply('Sorry, I am not able to understand what you said. Here is a list of things I can do for you: <br>
<br>
    <em>!q</em> to submit a query <br><br>
    <em>Hi</em> or <em>Hello</em> to chat with me <br><br>
    <em>!joke</em> to have a laugh <br><br>
    <em>!qp [course]</em> to go to course question papers eg. !qp cml100 <br><br>
    <em>!em</em> for emergency contacts <br><br>
    <em>!em security</em> for security contacts <br><br>
    <em>!em hostels</em> for hostel contacts <br><br>
    <em>!rep [hostel_name]</em> for BSW Rep details');
});

$botman->listen();