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
        <a href="../../logout.php">로그아웃</a>
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
        <a href="epi1_no_action.php">remove action</a>
        <ul class='script'>
            <li><span>Mr. Krabs:</span> Hmm. Sounds like a mutiny. [he goes outside and gasps] What the...? [The restaurant is filled with customers shouting angrily] What in Neptune's knickers is this?! [A customer grabs him]</li>
            <li><span>Frank (lifeguard):</span> Where's the dude in the boat, man? Where's the dude in the boat?!</li>
            <li><span>Mr. Krabs:</span> Ooooh! You mean Mr. Squidward. [he turns and points] Well, he's at his post right over the... [the wooden boat is empty] Where's me cashier?! [He looks down at the Frank, who's still holding his arm. He glares at him, and pulls his arm away. Mr. Krabs bursts into the kitchen] SpongeBob! Where in Poseidon's pantyhose is that sorry excuse for a cashier?!</li>
            <li><span>SpongeBob:</span> Sorry, excuse for a cash-- Ooh! You mean Squidward.</li>
            <li><span>Mr. Krabs:</span> [sighs] Yes. I mean Squidward. Where is he?!</li>
            <li><span>SpongeBob:</span> He's in the storage room. Says he's working on something requiring... [in a whisper] ...complete privacy.</li>
            <li><span>Mr. Krabs:</span> Ooh. He requires, privacy does he? [the sound of a chain snapping is heard, followed by a loud crash. SpongeBob and Mr. Krabs burst into the storage room] What's all the ruckus?! [A shelf has partially collapsed, and there are buns scattered in a heap all over the floor. Squidward emerges from the pile, rubbing his head and groaning. Mr. Krabs gasps] Oh no! Please, no! This is terrible! [bursts into tears] Are you hurt?</li>
            <li><span>Squidward:</span> Oh, well. Thank you for ask-</li>
            <li><span>Mr. Krabs:</span> I wasn't talking to you! [picks up some of the buns] Don't worry, papa's here. [bursts into tears again]</li>
            <li><span>Squidward:</span> Mr. Krabs? [Mr. Krabs continues sobbing] Mr. Krabs! [Mr. Krabs sobs even louder] Mr. Krabs! [he stops sobbing] Your shelf collapsed on me and I twisted my ankle! [lifts up his tentacle, which is badly twisted]</li>
            <li><span>Mr. Krabs:</span> I didn't even know you had ankles.</li>
            <li><span>Squidward:</span> As if working here wasn't bad enough, now I've been injured on the job.</li>
            <li><span>Mr. Krabs:</span> Injured? On the job? Oh, no! That would mean...</li>
            <li><span>SpongeBob:</span> It's all right here, Mr. Krabs. [Mr. Krabs turns and looks as SpongeBob moves some boxes aside to reveal a poster with "OWS" written on it] The Bikini Bottom OWS Worker Safety Guidelines. Let's see, it says here... Blah. blah, blah, blah, accident... Blah, blah, blah, blah, owner negligence... Blah, blah, blah, blah, substantial fines.</li>
            <li><span>Mr. Krabs:</span> Substantial fines?! [turns back to Squidward, laughing nervously] You know, Squidward... uh... I can't really let the OWS hear about this, you know. [laughs nervously. Squidward smirks]</li>
            <li><span>Squidward:</span> Really? Maybe I should give them a call. [picks up a phone]</li>
            <li><span>Mr. Krabs:</span> Now, now, Squidward! [laughs nervously] Let's not be hasty! [Squidward puts down the phone] I'll take care of your poor little ankle personally. [turns around] SpongeBob! Squidward needs first aid! [SpongeBob looks delighted]</li>
            <li><span>SpongeBob:</span> First aid? Fear not, injured co-worker, [runs over to Squidward, now wearing a hospital hat and jacket and a stethoscope] for I am certified.</li>
            <li><span>Squidward:</span> Oh, no, no, no, don't touch me! [SpongeBob grabs Squidward's nose and runs his stethoscope over it] SpongeBob, would you mind letting go of my nose?</li>
            <li><span>SpongeBob:</span> Oh, sure. [lets go of Squidward's nose, and it flies back, hitting Squidward]</li>
            <li><span>Squidward:</span> Ow! [takes the end of SpongeBob's stethoscope and shouts into the end of it] Get away from me! [SpongeBob shakes from the yell and hits his eardrums to make it stop] Well, this is it! I am reporting you to the OWS!</li>
            <li><span>Mr. Krabs:</span> [screams] Please don't report me to the OWS! I'll do anything, anything at all ya ask!</li>
            <li><span>Squidward:</span> Hmm? Anything? [cuts to scene where Mr. Krabs lays Squidward down]</li>
            <li><span>Mr. Krabs:</span> Now if you want anything, just ask. [laughs nervously then walks away]</li>
            <li><span>Squidward:</span> I could sure use a pillow. [Mr. Krabs comes back to Squidward with a pillow. He places the pillow on Squidward's back]</li>
            <li><span>Squidward:</span> And one more for my foot.</li>
            <li><span>Mr. Krabs:</span> Well, sure thing. [comes back with another pillow which is placed under Squidward's twisted foot] Okay, if that's all, I'll just get back to me--</li>
            <li><span>Squidward:</span> Fluff it.</li>
            <li><span>Mr. Krabs:</span> [angered] What did you say?</li>
            <li><span>Squidward:</span> I said, "fluff it."</li>
            <li><span>Mr. Krabs:</span> [mocking tone] Fluff my pillow, I'll fluff your pillow. [angrily fluffs the pillow for Squidward]</li>
            <li><span>Squidward:</span> [angered] What's that?</li>
            <li><span>Mr. Krabs:</span> Oh, uh, I said, uh, will there be anything else, Mr. Squidward?</li>
            <li><span>Squidward:</span> [relaxes on his pillow] No thanks. That should do it. [Mr. Krabs walks away] Oh, Krabsy!</li>
            <li><span>Mr. Krabs:</span> [irritated tone] What can I do for you?</li>
            <li><span>Squidward:</span> Just one more thing. I'm afraid you'll have to take over for me today.</li>
            <li><span>Mr. Krabs:</span> What!? No!</li>
            <li><span>Squidward:</span> Oh, that's too bad. It looks like my twisted ankle might become a 'permanent injury.'</li>
            <li><span>Mr. Krabs:</span> [cringes] Well, that would be an even bigger fine. You just sit back down and relax. We don't want you being injured any further. [chuckles nervously, then walks away] That was close. Well, at least the Krusty Krab isn't very busy today. [anchovies meep] Of course. [cuts to scene where SpongeBob holds a clipboard.]</li>
            <li><span>SpongeBob:</span> Oh, Mr. Krabs, I have the OWS accident report form to fill out. Let's see, Question 1 Was the accident the result of criminal negligence? [Mr. Krabs screams] Mr. Krabs, what is criminal negligence?</li>
            <li><span>Mr. Krabs:</span> [takes the clipboard from SpongeBob] It's what criminals wear to bed. Don't worry about that. We don't need to bother those nice folks over at the OWS. We can do our own investigation.</li>
            <li><span>SpongeBob:</span> Oh, you mean we should find out if you're criminally negligent.</li>
            <li><span>Mr. Krabs:</span> Well, no, not exactly, what I mean is... [leans towards SpongeBob and whispers] I think Mr. Squidward is hiding something, and I want you to investigate.</li>
            <li><span>SpongeBob:</span> Yes, sir, Mr. Krabs...</li>
            <li><span>Mr. Krabs:</span> Shhhh. [whispering] You gotta keep it a secret from Squidward.</li>
            <li><span>SpongeBob:</span> Can do, Mr. Krabs.</li>
            <li><span>[Cuts to scene where SpongeBob tries to figure out the cause of the accident]:</span></li>
            <li><span>SpongeBob:</span> Hmm? Huh? If I'm gonna get to the bottom of this, I'm gonna need some help. [Cuts to scene where Patrick is shown] Okay, you stand here... [places Patrick next to the shelf, then places a few buns on top] Now, pretend you're Squidward and reach for a bun. [Patrick does so] And I'll simulate the shelf hitting Squidward. [slams the shelf into Patrick, who screams and stumbles around, dizzy, before falling over] Hmm, we seem to be missing something. Well, we'll have to do it again.</li>
            <li><span>Patrick:</span> Uhh, do what again? [cut to outside of the scene] Ow!</li>
            <li><span>SpongeBob:</span> Darn, one more time.</li>
            <li><span>Patrick:</span> Ow! [cuts to scene where Squidward relaxes on Krusty Krab roof. Mr. Krabs comes to the roof with a tea kit in his hand]</li>
            <li><span>Squidward:</span> Oh, Krabsy, after tea, I think a full tentacle massage would be an order.</li>
            <li><span>Mr. Krabs:</span> I ain't touching your tentacles with a 10-ft...</li>
            <li><span>Squidward:</span> [on phone] Hello, Office Workers Safety Department....[Mr. Krabs jumps at Squidward ripping the phone out of his hand, then eats it.]</li>
            <li><span>Mr. Krabs:</span> [chuckles nervously] I'll go get the massage oil now. [runs inside; cut to the storage room] Boy, ya got anything?</li>
            <li><span>SpongeBob:</span> Not yet, Mr. Krabs. [Mr. Krabs groans; takes a bucket of fry grease]</li>
            <li><span>Squidward:</span> [clearing throat] I'm waiting!</li>
            <li><span>Mr. Krabs:</span> Coming!</li>
            <li><span>SpongeBob:</span> This just isn't adding up.</li>
            <li><span>Patrick:</span> [sits up] Pudding?</li>
            <li><span>SpongeBob:</span> We must be missing something. Patrick, we're going to need help even more expert than you. [cut to inside the Krusty Krab, where Mr. Krabs massages Squidward's tentacles using the fry grease]</li>
            <li><span>Frankie Billy:</span> Um, hello? Anybody here?</li>
            <li><span>Mr. Krabs:</span> [angered, muttering] Oh, for the love of peat moss.</li>
            <li><span>Frankie Billy:</span> Anybody at all? Hmm, maybe they're on their lunch bre-- [Mr. Krabs reaches into Frankie Billy's pocket, pulling out the money, walks into the kitchen to prepare a Krabby Patty, then comes out to present a Patty covered in fry grease]</li>
            <li><span>Frankie Billy:</span> Um, aren't you gonna wash your... [Mr. Krabs shoves the greasy Krabby Patty into Frankie Billy's mouth; Frankie Billy groans in pain as he holds his stomach. Mr. Krabs returns to pampering Squidward by continuing to massage his tentacles]</li>
            <li><span>Mr. Krabs:</span> How long do I have to keep this up?</li>
            <li><span>Squidward:</span> Oh, it's gonna be a long, slow recovery. Time to pop my back barnacles. [Mr. Krabs screams as Squidward's back barnacles are shown and then he cries. The customers mutter in anger]</li>
            <li><span>OWS Manager:</span> Office Workers Safety Department. I'm here to investigate the accident.</li>
            <li><span>Mr. Krabs:</span> [gasps] Oh, no!</li>
            <li><span>Squidward:</span> [sitting up] Oh, yes!</li>
            <li><span>Mr. Krabs:</span> Squidward, after all I've done for you, you've called the OWS?!</li>
            <li><span>SpongeBob:</span> He didn't call them, Mr. Krabs, we did. I needed help investigating the accident. Right, buddy?</li>
            <li><span>Patrick:</span> Uh, breakfast, green, Finland.</li>
            <li><span>Squidward:</span> Well I, for one, plan to give him my full cooperation. [seen in a wheelchair with casts around his head, his arm, and one of his legs] Anything I can do, inspector? [smiles at Mr. Krabs, who fumes with anger; cuts to scene where they all investigate the accident]</li>
            <li><span>OWS Manager:</span> So, this is where the accident occurred. Can anyone tell me what happened?</li>
            <li><span>Squidward:</span> I'll be glad to... [in despair] I mean, I can re-live the whole tragic episode, if I must. [struggles to get up from the wheelchair] [flashback begins] It was just another day at the Krusty Krab. I was at the register, giving it a nice shining between orders, when something caught my eye; a patty bun with 10 seeds, instead of 11. I wasn't about to stand idly by and allow a customer go without all his guaranteed nutrients and vitamins. "I must replace it with a proper bun!", I said. I dashed into action.</li>
            <li><span>Squidward:</span> Excuse me, sir.</li>
            <li><span>Frankie Billy:</span> What a diligent and charming individual.</li>
            <li><span>Squidward:</span> That's when I entered the back room to grab a new bun. Just as I was about to reach for one, I heard a slight creek. And that's when the chain snapped... and then, slam! My heroic and brave actions were halted by an unsafe shelf. Disoriented and in pain, I collapsed and lay for nearly six hours crying softly for help. [cries and then, flashback ends] And the worst part, though, is... is that I didn't get that kind gentleman his new bun.</li>
            <li><span>OWS Manager:</span> Hmm, I see. As you know, certain penalties are involved...</li>
            <li><span>Mr. Krabs:</span> Oh, no...</li>
            <li><span>OWS Manager:</span> [types in random numbers while Mr. Krabs cries] One... dollar.</li>
            <li><span>Mr. Krabs:</span> [gasps, blinking, wild sobbing, train bell dings] No...! Why?! Why, why?! Huh? [scene zooms out to reveal a surveillance camera] What's this? Hold on a second. Me video surveillance camera!</li>
            <li><span>Squidward:</span> [shocked] What?!</li>
            <li><span>Mr. Krabs:</span> I forgot. I, uh, um, borrowed that from the airport. Now, let's see what really happened here. [Mr. Krabs comes back with the recording tape and the TV from the surveillance. Squidward is seen walking towards the bun shelf, but what he does is sleep on it. The chain immediately breaks and Squidward falls unharmed under the buns. Mr. Krabs gasps, then turns to Squidward furiously.] You... faker! Not to mention you were sleeping on the job! [sighs deeply, forcing Squidward to the ground]</li>
            <li><span>Squidward:</span> What are you going to do to me?</li>
            <li><span>Mr. Krabs:</span> [growls] I'm gonna make you pay.</li>
            <li><span>Squidward:</span> Oh, no! [cuts to scene where Mr. Krabs gets pampered. Mr. Krabs sighs. Squidward gasps after seeing the barnacles on Mr. Krabs' back. When Squidward starts to pop some of the barnacles on Mr. Krabs back, he screams in disgust and sorrow.]</li>
        </ul>
        <div class="foot">
            
        </div>
    </body>
</html>