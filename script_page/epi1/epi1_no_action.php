<?php 
  include '../../inc_head.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <title>english with sponge_bob</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css?2.2.2">
    </head>
    <body>
    <div class="top">
        <?php
            echo $_SESSION[ 'username' ]
        ?>
        
        <?php
            if ( $jb_login ) {
        ?>
        님 안녕하세요
        <a href="logout.php">로그아웃</a>
        <a href="">마이페이지</a>
        <?php
            }else{
        ?>
        <a href="../../join.php">회원가입</a>
        <a href="../../login.php">로그인</a>
        <?php
            }
        ?>
        </div>
        <a href="../../main.php"><div class="head">
            <img class="headimg" src="../../images/spongebob.jpeg">
            <h1>SpongeBob with English</h1>
        </div></a>
        <a href="https://www.netflix.com/watch/81408831?trackId=255824129&tctx=0%2C2%2CNAPA%40%40%7C4bf66e70-5905-4b84-8a3e-668aaeeab6bf-103691018_titles%2F1%2F%2Fsp%2F0%2F0%2CNAPA%40%40%7C4bf66e70-5905-4b84-8a3e-668aaeeab6bf-103691018_titles%2F1%2F%2Fsp%2F0%2F0%2Cunknown%2C%2C4bf66e70-5905-4b84-8a3e-668aaeeab6bf-103691018%7C1%2CtitlesResults%2C70155547%2CVideo%3A81408831%2CdetailsPageEpisodePlayButton">
            <img class="netflix" src="../../images/netflix.png">
        </a>
        <ul>
            <li>Kim is Green</li>
            <li>Park is Yellow</li>
            <li>Yang is Blue</li>
        </ul>
        <a href="epi1.php">original</a>
        <ul class='script'>
            <li><span>Mr. Krabs:</span> Hmm. Sounds like a mutiny.  What the...?  What in Neptune's knickers is this?! </li>
            <li><span>Frank (lifeguard):</span> Where's the dude in the boat, man? Where's the dude in the boat?!</li>
            <li><span>Mr. Krabs:</span> Ooooh! You mean Mr. Squidward.  Well, he's at his post right over the...  Where's me cashier?!  SpongeBob! Where in Poseidon's pantyhose is that sorry excuse for a cashier?!</li>
            <li><span>SpongeBob:</span> Sorry, excuse for a cash-- Ooh! You mean Squidward.</li>
            <li><span>Mr. Krabs:</span>  Yes. I mean Squidward. Where is he?!</li>
            <li><span>SpongeBob:</span> He's in the storage room. Says he's working on something requiring...  ...complete privacy.</li>
            <li><span>Mr. Krabs:</span> Ooh. He requires, privacy does he?  What's all the ruckus?!  Oh no! Please, no! This is terrible!  Are you hurt?</li>
            <li><span>Squidward:</span> Oh, well. Thank you for ask-</li>
            <li><span>Mr. Krabs:</span> I wasn't talking to you!  Don't worry, papa's here. </li>
            <li><span>Squidward:</span> Mr. Krabs?  Mr. Krabs!  Mr. Krabs!  Your shelf collapsed on me and I twisted my ankle! </li>
            <li><span>Mr. Krabs:</span> I didn't even know you had ankles.</li>
            <li><span>Squidward:</span> As if working here wasn't bad enough, now I've been injured on the job.</li>
            <li><span>Mr. Krabs:</span> Injured? On the job? Oh, no! That would mean...</li>
            <li><span>SpongeBob:</span> It's all right here, Mr. Krabs.  The Bikini Bottom OWS Worker Safety Guidelines. Let's see, it says here... Blah. blah, blah, blah, accident... Blah, blah, blah, blah, owner negligence... Blah, blah, blah, blah, substantial fines.</li>
            <li><span>Mr. Krabs:</span> Substantial fines?!  You know, Squidward... uh... I can't really let the OWS hear about this, you know. </li>
            <li><span>Squidward:</span> Really? Maybe I should give them a call. </li>
            <li><span>Mr. Krabs:</span> Now, now, Squidward!  Let's not be hasty!  I'll take care of your poor little ankle personally.  SpongeBob! Squidward needs first aid! </li>
            <li><span>SpongeBob:</span> First aid? Fear not, injured co-worker,  for I am certified.</li>
            <li><span>Squidward:</span> Oh, no, no, no, don't touch me!  SpongeBob, would you mind letting go of my nose?</li>
            <li><span>SpongeBob:</span> Oh, sure. </li>
            <li><span>Squidward:</span> Ow!  Get away from me!  Well, this is it! I am reporting you to the OWS!</li>
            <li><span>Mr. Krabs:</span>  Please don't report me to the OWS! I'll do anything, anything at all ya ask!</li>
            <li><span>Squidward:</span> Hmm? Anything? </li>
            <li><span>Mr. Krabs:</span> Now if you want anything, just ask. </li>
            <li><span>Squidward:</span> I could sure use a pillow. </li>
            <li><span>Squidward:</span> And one more for my foot.</li>
            <li><span>Mr. Krabs:</span> Well, sure thing.  Okay, if that's all, I'll just get back to me--</li>
            <li><span>Squidward:</span> Fluff it.</li>
            <li><span>Mr. Krabs:</span>  What did you say?</li>
            <li><span>Squidward:</span> I said, "fluff it."</li>
            <li><span>Mr. Krabs:</span>  Fluff my pillow, I'll fluff your pillow. </li>
            <li><span>Squidward:</span>  What's that?</li>
            <li><span>Mr. Krabs:</span> Oh, uh, I said, uh, will there be anything else, Mr. Squidward?</li>
            <li><span>Squidward:</span>  No thanks. That should do it.  Oh, Krabsy!</li>
            <li><span>Mr. Krabs:</span>  What can I do for you?</li>
            <li><span>Squidward:</span> Just one more thing. I'm afraid you'll have to take over for me today.</li>
            <li><span>Mr. Krabs:</span> What!? No!</li>
            <li><span>Squidward:</span> Oh, that's too bad. It looks like my twisted ankle might become a 'permanent injury.'</li>
            <li><span>Mr. Krabs:</span>  Well, that would be an even bigger fine. You just sit back down and relax. We don't want you being injured any further.  That was close. Well, at least the Krusty Krab isn't very busy today.  Of course. </li>
            <li><span>SpongeBob:</span> Oh, Mr. Krabs, I have the OWS accident report form to fill out. Let's see, Question 1 Was the accident the result of criminal negligence?  Mr. Krabs, what is criminal negligence?</li>
            <li><span>Mr. Krabs:</span>  It's what criminals wear to bed. Don't worry about that. We don't need to bother those nice folks over at the OWS. We can do our own investigation.</li>
            <li><span>SpongeBob:</span> Oh, you mean we should find out if you're criminally negligent.</li>
            <li><span>Mr. Krabs:</span> Well, no, not exactly, what I mean is...  I think Mr. Squidward is hiding something, and I want you to investigate.</li>
            <li><span>SpongeBob:</span> Yes, sir, Mr. Krabs...</li>
            <li><span>Mr. Krabs:</span> Shhhh.  You gotta keep it a secret from Squidward.</li>
            <li><span>SpongeBob:</span> Can do, Mr. Krabs.</li>
            <li><span>:</span></li>
            <li><span>SpongeBob:</span> Hmm? Huh? If I'm gonna get to the bottom of this, I'm gonna need some help.  Okay, you stand here...  Now, pretend you're Squidward and reach for a bun.  And I'll simulate the shelf hitting Squidward.  Hmm, we seem to be missing something. Well, we'll have to do it again.</li>
            <li><span>Patrick:</span> Uhh, do what again?  Ow!</li>
            <li><span>SpongeBob:</span> Darn, one more time.</li>
            <li><span>Patrick:</span> Ow! </li>
            <li><span>Squidward:</span> Oh, Krabsy, after tea, I think a full tentacle massage would be an order.</li>
            <li><span>Mr. Krabs:</span> I ain't touching your tentacles with a 10-ft...</li>
            <li><span>Squidward:</span>  Hello, Office Workers Safety Department....</li>
            <li><span>Mr. Krabs:</span>  I'll go get the massage oil now.  Boy, ya got anything?</li>
            <li><span>SpongeBob:</span> Not yet, Mr. Krabs. </li>
            <li><span>Squidward:</span>  I'm waiting!</li>
            <li><span>Mr. Krabs:</span> Coming!</li>
            <li><span>SpongeBob:</span> This just isn't adding up.</li>
            <li><span>Patrick:</span>  Pudding?</li>
            <li><span>SpongeBob:</span> We must be missing something. Patrick, we're going to need help even more expert than you. </li>
            <li><span>Frankie Billy:</span> Um, hello? Anybody here?</li>
            <li><span>Mr. Krabs:</span>  Oh, for the love of peat moss.</li>
            <li><span>Frankie Billy:</span> Anybody at all? Hmm, maybe they're on their lunch bre-- </li>
            <li><span>Frankie Billy:</span> Um, aren't you gonna wash your... </li>
            <li><span>Mr. Krabs:</span> How long do I have to keep this up?</li>
            <li><span>Squidward:</span> Oh, it's gonna be a long, slow recovery. Time to pop my back barnacles. </li>
            <li><span>OWS Manager:</span> Office Workers Safety Department. I'm here to investigate the accident.</li>
            <li><span>Mr. Krabs:</span>  Oh, no!</li>
            <li><span>Squidward:</span>  Oh, yes!</li>
            <li><span>Mr. Krabs:</span> Squidward, after all I've done for you, you've called the OWS?!</li>
            <li><span>SpongeBob:</span> He didn't call them, Mr. Krabs, we did. I needed help investigating the accident. Right, buddy?</li>
            <li><span>Patrick:</span> Uh, breakfast, green, Finland.</li>
            <li><span>Squidward:</span> Well I, for one, plan to give him my full cooperation.  Anything I can do, inspector? </li>
            <li><span>OWS Manager:</span> So, this is where the accident occurred. Can anyone tell me what happened?</li>
            <li><span>Squidward:</span> I'll be glad to...  I mean, I can re-live the whole tragic episode, if I must.   It was just another day at the Krusty Krab. I was at the register, giving it a nice shining between orders, when something caught my eye; a patty bun with 10 seeds, instead of 11. I wasn't about to stand idly by and allow a customer go without all his guaranteed nutrients and vitamins. "I must replace it with a proper bun!", I said. I dashed into action.</li>
            <li><span>Squidward:</span> Excuse me, sir.</li>
            <li><span>Frankie Billy:</span> What a diligent and charming individual.</li>
            <li><span>Squidward:</span> That's when I entered the back room to grab a new bun. Just as I was about to reach for one, I heard a slight creek. And that's when the chain snapped... and then, slam! My heroic and brave actions were halted by an unsafe shelf. Disoriented and in pain, I collapsed and lay for nearly six hours crying softly for help.  And the worst part, though, is... is that I didn't get that kind gentleman his new bun.</li>
            <li><span>OWS Manager:</span> Hmm, I see. As you know, certain penalties are involved...</li>
            <li><span>Mr. Krabs:</span> Oh, no...</li>
            <li><span>OWS Manager:</span>  One... dollar.</li>
            <li><span>Mr. Krabs:</span>  No...! Why?! Why, why?! Huh?  What's this? Hold on a second. Me video surveillance camera!</li>
            <li><span>Squidward:</span>  What?!</li>
            <li><span>Mr. Krabs:</span> I forgot. I, uh, um, borrowed that from the airport. Now, let's see what really happened here.  You... faker! Not to mention you were sleeping on the job! </li>
            <li><span>Squidward:</span> What are you going to do to me?</li>
            <li><span>Mr. Krabs:</span>  I'm gonna make you pay.</li>
            <li><span>Squidward:</span> Oh, no! </li>
        </ul>
        <div class="foot">
            
        </div>
    </body>
</html>