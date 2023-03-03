<?php
function answerQuery()
{
    $responses = ["It is certain", "It is decidely so", "Without a doubt", "Yes-definitely", "You may rely on it", "As I see it, yes", "Most likely", "Outlook good", "Yes", "Signs point to yes", "Reply hazy, try again", "Ask again later", 
    "Better not tell you now", "Cannot predict now", "Concentrate and ask again", "Don't count on it" ,"My reply is no", "My sources say no", "Outlook not so good", "Very doubtful"];

    echo "Question: ";
    $question = fgets(STDIN);

    echo "Let me dig deep into the waters of life, and find your answer\n";
    sleep(2);

    echo "Hmmm\n";
    sleep(2);

    $picked = array_rand($responses);
    echo $responses[$picked], "\n";
}

do {
    answerQuery();

   
    echo "Would you like to ask the Wise One another question? Y/N: ";
    $secondQuestion = fgetc(STDIN);
    echo "\n";

 } while (strtoupper($secondQuestion) === "Y");

?>
hhh