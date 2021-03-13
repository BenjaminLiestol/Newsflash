<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
?>

<html>
<head>
  <meta charset="utf-8" lang="en">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <link rel='stylesheet' type="text/css" href='style.css'></style>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

</head>

<body id="body">
  <div id="introwin" class="intro" class="noscroll">
      <h1 class="header">NewsFlash</h1>
      <p id="intro" class="fire-text">HOT</p>

<!--Slider-->
    <div class="slider">
      <input type="range" min="20" max="40" id="slider">
    </div>
  </div>

<!--Menu-->
  <div class="menu">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
  <div class="overlay_settings" id="settings">

  <!--Buttons-->
      <div class="buttondiv">

        <!--Dark Mode-->
        <p class="text">Dark Mode</p>
        <label class="switch">
          <input id="button" type="checkbox" checked>
          <span></span>
        </label>

        <!--Hidden pictures-->
        <p class="text">Hide/Show Pictures</p>
        <label class="switch">
          <input id="slide" type="checkbox" checked>
          <span></span>
        </label>

        <!--Category creator. Work in progress-->
        <p class="text">Create Category</p>
        <button onclick="document.getElementById('id01').style.display='block'" class="design" type="button" name="button">+</button>
        <!--Account settings. Work in progress-->
        <p class="text">My Account</p>
        <button class="design" type="button" name="button"><a href="welcome.php">   ^   </a></button>

      </div>
  </div>

  <!--Form-->
  <div id="id01" class="modal">
    <!-- Modal Content -->
    <form class="modal-content animate">
      <div class="avatarContainer">
        <label for="uname"><b>Create Category</b></label>
        <input id="name" type="text" placeholder="Enter Category Name" name="cname" required>

        <button id="create" type="submit">Submit</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>

<!--Overlay articles go here-->
  <div class="overlay" id="overlayRed">
    <h1>Red Dead Online update</h1>
    <p>
      One of Red Dead Online's longest-standing issues has been Cripps' over-enthusiasm for packing up camps - a problem that's been particularly devastating for those with the trader role. Coming back to butcher some carcasses? Too bad: Cripps has moved your stuff, and now you can't respawn the camp anywhere thanks to a glitchy menu. The problems always seemed to be worse in busy lobbies, where multiple players were contending for camping spots.
      The patch notes for this week's update have now been revealed - and it seems Rockstar is addressing some of these camp problems. In particular, the patch takes aim at the "flashing prompts and an incorrect 'Cripps has packed up your camp' alert" in the player menu, and reducing "the chance of player camps being packed up during dynamic session switching in Red Dead Online". And, finally, a glitch that caused pitched camps to "not spawn correctly when approaching the marked blip on the Radar/Map".
      I tried running the game after the patch, and for once it did seem like the menu was behaving: I could move my camp easily via the player menu, and neither running around the world nor moving between lobbies forced Cripps to pack up my stuff. While it's been working for me and some other players, this hasn't been the case for everyone, and some are still reporting issues with disappearing camps since the update, along with a bug that spawns multiple Cripps when trying to pitch a camp. A true nightmare.
      This update seems to have been a bit bumpy for many - as reported by VG247, players have seen their Moonshine Shacks disappear (something that can apparently be fixed by reloading multiple times), while others are reporting problems with animals spawns, despite recent attempts by Rockstar to restore the wildlife population.
      It's hard to say how widespread these issues are, but even in my short testing period I experienced a disconnect error - suggesting Rockstar still has a way to go in smoothing out the online mode. But at least my camp is staying put... for now.
    </p>
  </div>
  <div class="overlay" id="overlayE3">
    <h1>E3 2020 has been canceled</h1>
    <p>
      E3 is the latest major event to be canceled in the wake of the new coronavirus. Ars Technica and Bloomberg were first to report that the Entertainment Software Association, which puts on the annual video game trade show, would announce the cancelation. The ESA later confirmed the news in a statement on its site:
      After careful consultation with our member companies regarding the health and safety of everyone in our industry — our fans, our employees, our exhibitors, and our longtime E3 partners — we have made the decision to cancel E3 2020, scheduled for June 9-11 in Los Angeles.
      Following increased and overwhelming concerns about the COVID-19 virus, we felt this was the best way to proceed during such an unprecedented global situation. We are very disappointed that we are unable to hold this event for our fans and supporters. But we know it’s the right decision based on the information we have today.
      Our team will be reaching out directly to exhibitors and attendees with information about providing full refunds.
      We are also exploring options with our members to coordinate an online experience to showcase industry announcements and news in June 2020. Updates will be shared on E3Expo.com.
      We thank everyone who shared their views on reimagining E3 this year. We look forward to bringing you E3 2021 as a reimagined event that brings fans, media, and the industry together in a showcase that celebrates the global video game industry.
      Meanwhile, at least one major company has announced plans for a digital event during the same time frame. In a statement, Microsoft said that:
      The health and safety of employees, fans and our partners around the world is a top priority. We support the ESA in its decision to cancel E3 following increased public concerns with the COVID-19 virus. E3 has always been an important moment for us to show what’s ahead from Team Xbox. This year we’ll celebrate the next generation of gaming with the Xbox community and all who love to play around the world via a digital event. We will share details on timing and more in the coming weeks.
      Publisher Devolver Digital, which is known for its chaotic live press conferences at E3, had already presaged the news with an ominous tweet:
      Devolver Digital
      ✔
      @devolverdigital
      Cancel your E3 flights and hotels, y’all.
      34.7K
      2:03 AM - Mar 11, 2020
      Twitter Ads info and privacy
      5,736 people are talking about this
      The news comes after a significant number of gaming and tech events have been similarly canceled or postponed. That includes the Game Developers Conference, Facebook’s F8, Nvidia’s GPU Technology Conference, Google I/O 2020, SXSW in Austin, and more, while companies like Twitter have urged employees to work from home.
    </p>
  </div>
  <div class="overlay" id="overlayOri">
    <h1>Ori and the Will of the Wisps</h1>
    <p>
      (PressFire.no): Jeg pleier alltid å si at Metoidvania er et av grunnstoffene i gode dataspill – ikke nødvendigvis kun plattformspill med låste seksjoner som må låses opp med spesielle evner, men hvordan den bruker belønning i konkret spillmekanikk og dermed også motiverer deg med meningsfylt innhold.
      Det er lite som er så pirrende som å få en ny egenskap som du vet du kan bruke på plasser du tidligere har passert. Hva er så gjemt bak den låste delen? Større kapasitet for ammunisjon? Mer helse? Et nytt spesialangrep?
      Dette er nok grunnen til at sjangeren også har blitt en av de mest populære de senere årene.
      Men sjelden er de vellagde som her.
      Akutt fare for Stendhal-syndrom
      Det visuelle utrykket er intet mindre enn enestående vakkert, som bugner over av detaljer med en nærmest bunnløs variasjon. Lyset, fargene og animasjonene minner nærmest om levende oljemalerier.
      Med plattformspill pleier det å være en viss grad av gjentagende bestanddeler, som gjerne blir gjenbrukt, men i «Ori and the Will of The Wisp» ser nærmest hver minste detalj i landskapet håndlaget ut. Og det i et univers som på et tidspunkt virket å aldri ha en ende.
      I det ene øyeblikket tasser du på bunnen av en frodig skog mens solstrålene trenger gjennom grenene – i det andre øyeblikket svømmer du som en delfin mellom rosa og turkise anemoner og fargerike koraller.
      Man skal heller ikke undervurdere det strålende musikksporet, som nyter godt av full orkestrering. Musikken klarer å sementere flere øyeblikk på hukommelsen, både av det ubehagelige og det melankolske slaget.
      Det finnes øyeblikk så nydelige at det er akutt fare for Stendhal-syndrom.
      Full kontroll
      Men det blir ikke den helt store plattformopplevelsen om ikke mekanikkene er interessante og kontrollsystemet føles responsivt og helst intuitivt.
      Og det er ikke bare lakken som er av ypperste klasse – motorikken er silkemyk, mens plattform- og kampmekanikkene renner over av kreative krumspring. Det er litt av et arsenal med akrobatikk du tilegner deg, og det er imponerende hvor godt de har klart å gi deg en følelse av kontroll.
      Det er faktisk helt essensielt, for det er mer enn én ordentlig utfordring du møter i løpet av spillet. Og selv om man garantert får seg en knyttneve i trynet med frustrasjon, så føles det stort sett alltid som ens egen feil. Imponerende er det også hvordan spillet lærer deg i å bli bedre i spillet – det som føltes uoverkommelig for tre timer siden er plutselig «enkelt».
      Når du i tillegg blander inn gåter i plattformingen, gjerne som må løses mens du henger i luften over giftig vann eller pigger, så blir det fort ekstra hjerteslag og svette hender.
      Men før du vet ordet av det så danser du rundt fiender og farer gjennom en rute som tidligere ikke bare var utilgjengelig, men virket fullstendig umulig for andre enn veltrente pianospillere.
      Det finnes mange kreative designvalg her og noen av dem tar en uvanlig vending, hvor den tidligere fienden din plutselig er essensiell som et verktøy.
      Parkour i dunkelt eventyr
      Dette er rett og slett plattformkunst helt i toppsjiktet – der du til slutt må venne deg av med å tenke hvilke knapper du skal trykke, men handler på instinkt, muskelminne, intuisjon og en god dose håp.
      En ting som gjør det hele ekstra spesielt er at det strukturmessig er designet for en god del frihet, hvor du ikke bare kan velge litt hvilke oppdrag du vil løse, men også at hva du vil bruke «pengene» på. Du kan oppgradere litt etter behov. Lyst på litt ekstra liv, eller et tredje ekstrahopp? Da får du spare litt valuta og besøke pusheren.
      Det er også et spill som har skjønt forholdet mellom risiko og belønning – her blir du nesten alltid belønnet for å utforske. Og hele universet er strødd med sjarmtroll du vil bli kjent med, kanskje han eller hun selger deg et kart i samme slengen? Hvem vet?
      Å spille «Ori and the Will of the Wisps» er som å tre inn i et oppslukende og eksotisk folkeeventyr velsignet av Studio Ghibli – og som alle eventyr har det undertoner av alvor. For i bunnen ligger det en beskjed om hvordan foreldre kan påvirke barns perspektiv på verden – og spesielt de.
      Det er en fryd å spille dette mesterverket og til den som måtte føle for å samle alt i dette spillet – lykke til, men du kommer i alle fall til å ha det fantastisk moro.
      «Ori and the Will of the Wisps» er ute til Xbox One (testet) og pc.
    </p>
  </div>
  <div class="overlay" id="overlayAmazon">
    <h1>Amazon Prime Day 2020</h1>
    <p>
      Amazon Prime Day 2020 will arrive a little later than expected, with the event said to be postponed until at least August (more on that in a bit), but that doesn’t mean we can’t start embracing what we expect to be the retailer’s most exciting event to date — filled with more discounts than ever before — with a little bit of harmless speculation.
      So, Prime Day 2020. What’s it about? Well, it’s far too early to say with absolute certainty what we’ll see. Heck, we don’t even know for certain when it will be (though we have a pretty good idea — more on that in a bit). One thing is almost for certain, though: While Amazon will be at the heart of Prime Day 2020, other retailers will also be throwing their hats into the ring.
      This means we can expect to see Best Buy and Walmart slashing prices of big-ticket items like Apple iPads and 4K TVs to compete with Amazon come Prime Day 2020. Of course, they won’t be able to take advantage of the Prime Day branding, so we won’t see ‘Best Buy Prime Day’ or ‘Walmart Prime Day’ advertisements every (digital) mile between earth and the moon.
      You can bet your bottom dollar they find some inventive way to profit off the Prime Day name, though. Maybe we’ll see Best Buy Day or Walmart Day. Some other options are Best Buy’s You-Know-What Day Sale and Walmart’s Blue Arrow Sale. The fact of the matter is, no matter how they wrap it up, these are Prime Day sales — and we as shoppers should welcome them.
      When is Prime Day 2020?
      Here’s where the situation takes a worst. Once expected to run from July 15 through July 16, Amazon Prime Day 2020 won’t arrive until at least August 2020 due to the novel coronavirus, COVID-19. The commerce titan expects to take a $100 million hit from excess devices it may now need to sell at a discount, according to internal meeting notes obtained by Reuters.
      How long will Prime Day 2020 last?
      Prime Day 2020 itself is expected to last for 48 hours. The festivities will no doubt commence before then, though, and could last until the end of the week if Amazon adopts a Cyber Week-like stance with its own Prime Week. It’s a move that would make financial sense: Amazon sold more on Prime Day than it did on Black Friday and Cyber Monday combined in 2019.
      What Prime Day 2020 deals can we expect?
      Nothing is off the cards when it comes to the Prime Day deals, with everything from Fire TV Sticks and Keurigs to MacBooks and even 8K TVs on sale for a fraction of their usual cost at earlier installments of the digital shopping bonanza. In short: If you have your eye on something and you can buy it online, chances are it will be cheaper on Prime Day 2020.
      Of course, some hardware is treated to larger reductions than others. Amazon’s own products, for example, are often some of the most discounted — with the Fire TV Stick often going for half-off. Other must-have products like the Amazon Echo and Amazon Kindle also receive a huge blow with the price-cutting sword, as are digital subscriptions like Twitch Prime.
      Still, other manufacturers rush to get in on the price-slashing action, offering comparable discounts. Last year’s Prime Day deals saw Apple hardware — from iPads to MacBooks — on sale for up to 50% off. Elsewhere, the Ring Video Doorbell 2 had been reduced by 40%. Instant Pots were another massively-discounted item, with Walmart offering as much as 60% off.
      With so many retailers now participating in Prime Day, it’s tough to predict exactly what will be on offer. Although, if the Prime Day deals of yesteryear are anything to go by, it’s fair to say if you’re on the hunt for something electronic, it will be discounted on Prime Day 2020 (if Amazon doesn’t stock it, you should be able to find it on sale at a different merchant, like Target).
      Are cheap Prime Day deals too good to be true?
      For every good deal out there on Prime Day, there are a dozen bad. That’s why it’s important to not only consult an impartial source of buying advice to find out whether the offer you’re looking at is really worth your hard-earned cash, but also to have an understanding of the tricks retailers use to dupe customers into thinking they’re looking at the deal of the decade.
      Most merchants treat Prime Day as a chance to offload stagnant stock, so most of the discounts you’ll find will be on aging models that people aren’t interested in anymore — and they use some immoral methods to flog them. For instance, you may find an HDTV reduced to a rock-bottom price, yet nowhere on the top half of the page does it state that it’s only 720p HD.
      So, what’s the issue? Well, the retailers aren’t technically at fault here. They disclose all the information they’re required to. But they bury it to fool bargain-hunting customers into taking advantage of an offer without doing their homework. Our point? If a deal is too good to be true, it probably is — even on Prime Day. There’s no harm in doing a little bit of research.
      Even if you just take to Google to make sure it has the one feature you have your heart set on, you will at least avoid some disappointment when it arrives. We have some better advice, though: Search for the best Prime Day deals right here at Digital Trends, where our experts separate the wheat from the chaff, then detail everything you need to know about each product.
      Are any Prime Day deals available now?
      No, silly! We don’t even know when Prime Day 2020 is set to take place, so there definitely aren’t any Prime Day deals available just yet. Having said that, there are oodles and oodles of fantastic offers on sought-after products like AirPods, Fire TV Sticks, Keurigs, Kindles, iPads, MacBooks, and 4K TVs at Amazon right now. We’ve cataloged all of the best deals below.
    </p>
  </div>
  <div class="overlay" id="overlayNvidia">
    <h1>Nvidia cancels GTC 2020 keynote</h1>
    <p>
      Nvidia has announced that it will no longer be holding a keynote presentation at this year’s GPU Technology Conference (GTC), which is taking place in San Jose, California, from March 22 to 26.
      While Nvidia already revealed that this year’s GTC event will be a digital-only due to concerns over coronavirus, Nvidia CEO Jensen Huang was still going to deliver the keynote presentation via livestream, but that has now been cancelled.
      Nvidia’s next-gen GeForce graphics cards could launch at GTC and be on sale in April
      Nvidia’s next-gen 7nm Ampere graphics cards could be revealed as soon as March
      A massive Nvidia graphics card just leaked: is this the Nvidia GeForce RTX 3080?
      Nvidia posted a message explaining that “in light of the spread of the coronavirus, it is deferring plans to deliver a webcast keynote as part of the digital version of its GPU Technology Conference later this month.”
      Instead, Nvidia will release press releases on Tuesday, March 24, covering the announcements that the company was due to make as part of the keynote.
      There will also be an investor call with Huang, which will be publicly shared on the day at 8am PT (11am ET, 3pm GMT, 1am March 25 AEST).
      While the lack of even a livestream is disappointing, according to Nvidia, “continuing public health uncertainties would challenge its ability to produce and deliver a digital keynote.”
      What about its new graphics cards?
      While Nvidia’s decision to be ultra cautious over the health of its employees and attendees of GTC is commendable, there will be people wondering what that means for its upcoming Ampere graphics card.
      That has been strongly rumored to debut at GDC, but does the cancellation of the livenote mean its launch could be delayed?
      Hopefully not. Nvidia is insisting that all announcements it was going to make will still happen, though via less exciting press releases. If the company was going to announce its next generation of powerful graphics cards, we should still hear about it on March 24.
      With its arch rival AMD gearing up to launch its own 'Nvidia killer' GPU, and Intel building its own discrete GPU, the pressure is on Nvidia to show off some really impressive hardware.
    </p>
  </div>
  <div class="overlay" id="overlayNioh">
    <h1>Nioh 2 review</h1>
    <p>
      Nioh 2 is an incredibly punishing game where even the lowliest enemy can kill you in mere moments. Through perseverance, precise combat, and careful preparation, you can emerge from a world filled with duplicitous demons and humans. If you love systems and mechanics, your cup is overflowing here as you master elements like guard-breaking to ninja items. But be warned, this teacher is not a kind or cuddly sensei. Nioh 2 can break your spirit through constant, grueling punishments that push you well beyond your limits, but perhaps you have the spirit of the samurai to soldier on and taste victory even when all seems lost.
      Deep and highly customizable combat is the shining jewel that carries Nioh 2. You train in a weapon (or weapons) of your choice, determine where to place your stat and ability points for the maximum benefit, and perfect the timing of blows. Nioh 2 introduces new features that add even more complexity to those systems, including the dark realm and yokai abilities. Burst counters are my favorite addition; through masterful timing, you can wait for an opponent to flash red before unleashing a deadly attack, but then turn that move into an opportunity for you to counter and destroy your assailant. Early in the game, you, you dread those red-flashing lethal strikes coming your way. By the end, you’ve mastered the technique and you can’t wait for enemies to try and hit you with a big one as it may be one of your best chances to get in some serious damage. This all makes burst countering a fun way to add variety and prevent you from relying too heavily on your old standbys.
      Your gameplay time is occupied by tons of main missions and rewarding side missions that provide skill points, gestures, and extra gear. I had the most fun with optional sub-missions that amount to fast-paced boss rushes, while main missions have a wide range of experiences from passable to maddening. As in the original, you can also take on more difficult missions for bigger hauls and get help from up to two other players. Teaming up with friends is easy, and it makes incredibly difficult encounters much easier, so it’s a great lifeline if you are stuck on a tough boss.
      While some games foster a sense of triumph by challenging players, Nioh 2 has a penchant for extracting the ultimate price in sadistic ways. Even the lowliest peasant can kill you with a stray slice of a sword, and many of the levels set up gruesome breadcrumb traps of death that force you to inch forward examining every possible scenario. Rush the first ranged enemy? It has two others covering it from afar, and you should have spotted them and used your rifle first – but there’s also a yokai patrol that can see you if you peek at them, so make sure to take that out first. This type of thing is common, and while it can be satisfying to check every corner before looting an item in the early stages, later on it becomes just a tiresome chore. You don’t have to wonder if something is hiding behind the wall or if something is going to fall from the ceiling; you just know it is, and it’s more fatiguing than inspiring.
      Now, that said, you’re still getting treated to a smorgasbord of fun boss battles and awesome customization. Refining your weapons into murder machines, gaining levels and skills, and collecting buckets of loot to complete gear sets is satisfying. Boss battles take a quantity-over-quality approach, with dozens of encounters and erratic difficulty. Some are extremely tough, while others are pushovers that leave you scratching your head waiting for a phase two that never comes.  Despite the inconsistency, I enjoyed many memorable fights among the deluge of “This guy is a samurai with a guardian spirit you probably won’t remember in 20 minutes” encounters.
      Nioh 2, like Nioh before it, is an unrelenting and extremely punishing ride that has you weighing every resource available. Despite some flaws, this experience carves you from an unrefined button-mashing flailing pustule into a precision-striking samurai.
    </p>
  </div>
  <div class="overlay" id="overlayMario">
    <h1>Mario day sale</h1>
    <p>
      It's Mario Day, and that means Mario Day sales. Yes, it's a thing - March 10, or 'Mar10', looks a bit like 'Mario'. Geddit? Anyway. To celebrate the moustachioed plumber, loads of his games on Nintendo Switch have seen discounts at a bunch of retailers, some with a whole $20 knocked off the price. Accessory deals and a Switch console offer have been thrown in as well for those who haven't yet taken the plunge (this bundle with a Mario-themed PowerA controller is just $299, for instance). To kick off the Mario Day sale, some recent Mario games have been reduced by $20 apiece: Super Mario Maker 2 has gone down to $39.99 at Walmart; and Super Mario Party has seen a price drop of $20 there as well. Although the bigger Mario games haven't seen such a significant reduction, Mario Kart 8 Deluxe has fallen by $15 to a more affordable $44.99 at Best Buy. Super Mario Odyssey has also tumbled to $44.99 at Best Buy, while New Super Mario Bros. U is $15 less. Suffice to say, there's a good amount of money to be saved here.
      It's worth noting that the event runs until March 14, 2020, so there are a few days left to enjoy a good deal on everything Mario-related from Switch and 3DS games to a whole host of other accessories.
    </p>
  </div>
  <div class="overlay" id="overlayTony">
    <h1>Tony Hawk leak</h1>
    <p>
      More unauthorised chatter on the internet, this time courtesy of punk band The Death Set, is pointing to the arrival of a new Tony Hawk game later this year.
      Cast your mind back to late 2019, and you might remember a double-whammy of leaks suggesting a new Tony Hawk game was in the works.
      Pro skateboarder Lizzie Armanto revealed she was involved in a new title during a chat with the Nine Club podcast, and reliable industry leaker Sabi shared word that a prototype remake of Tony Hawk's Pro Skater 1 and 2 had been doing the rounds internally at Activision.
      Subscribe to our YouTube channel
      Adding further fuel to that particular fire, punk band The Death Set announced on Facebook earlier today - in a post spotted by Twitter user TheNathanNS and since removed (presumably after polite requests or stern lawyer faces from Activision) - that it had "Just licensed 5 new songs to Tony Hawk 2020 game", and that fans would be "hearing this shit soon".
      TheNathanNS
      @TheNathanNS
      New Tony Hawk Pro Skater game inbound!
      Keeping hopes low after the long, long row of abysmal games since Tony Hawk's RIDE.
      But this also seems like a major NDA breach.
      Despite mounting evidence, Activision has remained tight-lipped regarding a new Tony Hawk game for this or any other future year. However, it's been five years since the poorly received Tony Hawk's Pro Skater 5 released - Eurogamer called it a "glitch-ridden and seemingly unfinished...tragic swansong for Tony Hawk's video game career" - so a respectful revival for the much-loved franchise is long overdue.
    </p>
  </div>
  <div class="overlay" id="overlayFake">
    <h1>Fake coronavirs claims</h1>
    <p>
      A "disinformation unit" has been set up by the Government to counter false and inaccurate claims around the coronavirus, amid concerns Britons are being deceived online.
      Ministers last night confirmed a cross-Whitehall group of experts would be working to identify fake news about Covid-19, and liaising with social media companies to ensure it is removed.
      Culture Secretary Oliver Dowden said "defending the country" from misinformation and digital interference was a "top priority".
      "As part of our ongoing work to tackle these threats we have brought together expert teams to make sure we can respond effectively should these threats be identified in relation to the spread of Covid-19."
      He said the efforts would "make sure we are on the front foot to act if required".
      News of the unit, which will operate out of the Department for Digital, Culture, Media and Sport, comes just days after US officials warned of a coordinated effort to spread fake news by “swarms of online, false personas”, which they claimed were linked to Russia.
      A number of fake claims have appeared online, including that a vaccine has already been found, and that tonic water can help cure the virus.
      Social media companies have already taken steps to crack down on such information, actively promoting verified and reliable sources of healthcare information such as the NHS.
      Facebook boss Mark Zuckerberg last week wrote that it was "important that everyone has a place to share their experiences and talk about the outbreak, but as our community standards make clear, it’s not okay to share something that puts people in danger".
      Retailers have also faced growing scrutiny in recent days for their handling of the crisis, with the UK's competition watchdog last Thursday warning them not to exploit fears over shortages.
      The Competition and Markets Authority said it was monitoring the situation, but was considering asking the Government to regulate prices.
      Some sellers of hand sanitisers and face masks have hiked prices by as much as 2000pc online.
      CMA chairman Lord Tyrie said the group would "do whatever we can to act against rip-offs and misleading claims, using any or all of our tools; and where we can’t act, we’ll advise government on further steps they could take, if necessary".
    </p>
  </div>
  <div class="overlay" id="overlayElon">
    <h1>Elon Musk will fly space tourists</h1>
    <p>
      SpaceX has announced a partnership to send three tourists to the International Space Station (ISS), the first private trip in more than a decade.
      Elon Musk's company has signed a deal with Axiom Space to transport the tourists along with a commander on one of its Crew Dragon capsules in the second half of 2021.
      Axiom CEO Michael Suffredini said the flight "will represent a watershed moment in the march toward universal and routine access to space." He did not reveal a price tag.
      The cost of launching a SpaceX Falcon 9 rocket is around $60m (£46m) and, throwing in the cost attached to building a new capsule, the project price tag could exceed $100m.
      Each ticket is therefore likely to cost tens of millions of dollars. One estimate suggests seats would be in the region of $50m.
      Eight space tourists have so far gone to the ISS on Russian Soyuz rockets with the company Space Adventures.
      The first was Dennis Tito, who paid $20m for an eight-hour stay on the ISS back in 2001. The last to go was Cirque du Soleil founder Guy Laliberte, in 2009.
      Last month, SpaceX announced a partnership with Space Adventures to send four tourists deeper into orbit than any private citizen before them.
      This mission is also projected for late 2021 at the earliest, but more likely 2022.
      Other companies involved in space tourism are Richard Branson's Virgin Galactic and Jeff Bezos's Blue Origin.
      The two are developing vessels to send tourists just beyond the border of space (80 kilometers or 100 kilometers – up to 62 miles – depending on how each defines it).
      Tickets for Virgin started at $250,000 when they first went on sale in the mid-2000s.
      SpaceX's offering is far more ambitious and powered by the same reusable Falcon 9 rocket that puts satellites into space and sends astronauts to the ISS.
      At the same time, Boeing is also developing a crew capsule called Starliner, also with the intention of transporting US astronauts to the ISS.
      Like SpaceX, Boeing envisages sending tourists into space, but the programme's development is hampered by major glitches that resulted in the early termination of an uncrewed test flight in December.
    </p>
  </div>
  <div class="overlay" id="overlayDoom">
    <h1>Doom 64's pc port</h1>
    <p>
      Doom 64's long-awaited Xbox One, PlayStation 4, Switch, and PC port is due to release in a little over a week, on Friday, 20th March, and ahead of the big day, word has arrived that it'll feature an entirely new, never-before-seen chapter of demon-slaying mayhem.
      That's according to James Haley, senior developer at porting studio Nightdive, who, in an interview with USgamer, explained that Doom 64's upcoming conversion will feature "a new chapter in the Doomguy's saga" that can be unlocked by "persistent players".
      This particular chunk of new action is said to unfold shortly after the end of Doom 64's original campaign, and pits players against [SPOILERS, I GUESS?] the sister of the slain Mother Demon, intent on ending their rampage around Hell once and for all [SPOILERS END HERE].
      Those reaching the end of the new chapter will apparently be rewarded with a bit of lore "that fans of both series, new and classic, should enjoy". Will it be revealed that the events of Doom 64 are wedged, chronologically speaking, between Doom 2016 and Doom Eternal? Given my limited understanding of Doom lore, I can only shrug helplessly here.
      Alongside the new story chapter, Nightdive has also confirmed a handful of other features being added to its Doom 64 ports, including the likes of motion control support and a touch-driven automap for PlayStation 4 and Switch users, mouse and keyboard support for Xbox One (and PC, obviously), new lighting options for modern displays, and the choice between red blood or the green blood seen in Doom 64's original Japanese release.
      Digital Foundry's John Linneman called Doom 64 "one of the finest technological achievements for Nintendo 64" and "an essential buy for Doom fans" in his exhaustive breakdown of every previous Doom console conversion, and those wishing to revisit it - or experience it for the first time - can do so on Xbox One, PS4, Switch, and PC from 20th March.
      It'll be available to purchase as a standalone release on all platforms, and is also being offered as a pre-order bonus for Doom Eternal, which launches on the same day. Switch players going for the latter option will, however, need to wait until Doom Eternal's later release date to play.
    </p>
  </div>
  <div class="overlay" id="overlayOne">
    <h1>One Punch Man review</h1>
    <p>
      Treningsregimet er som følger: 100 armhevninger, 100 magebøyinger, 100 knebøy, og løp 10 kilometer hver dag. Klarer du å holde følge med programmet til verdens sterkeste mann?
      One Punch Man: A Hero Nobody Knows
      På en planet ikke så ulik vår, jobber superhelter til daglig med å bekjempe monstre og andre trusler. En av disse er Saitama, den titulære One Punch Man. Til å begynne med var han bare en vanlig person som deg og meg, standard "mann i gata" med et hode fullt av hår. Men en dag etter å ha mistet jobben kom han mellom et monster og en gutt det prøvde å drepe, hvorpå han måtte ta et valg: La gutten dø, eller sette seg selv i fare.
      En kort slåsskamp seinere kom han akkurat i fra det med livet i behold, og med en ny ambisjon: Å bli en superhelt! (Mest bare for gøy.)
      Han trente så hardt at alt håret hans falt av, og nå er han så sterk at han dreper alt han slår med ett enkelt slag (derav navnet). Nå er han deprimert og på søken etter noe som kan gi han en utfordring.
      I dette spillet spiller vi ikke som Saitama.
      Det har nemlig dukket opp en ny helt med ambisjoner om å nå opp til toppen. Det er oss!
      Man starter spillet med å bygge seg en helt egen helt, og noe som er helt standard i begynnelsen, er utvalget av tilpasningsmuligheter litt begrenset. Likevel klarte jeg å skrape sammen en kurant skapning.
      One Punch Man: A Hero Nobody Knows
      Etter en litt klumsete introduksjon kommer man i gang, og det viser seg at spillet er av en action-rollespill-aktig sjanger. Om du er kjent med Naruto: Ultimate Ninja Storm-serien så vet du allerede hva mye av det går ut på. Løpe rundt, skaffe oppdrag, utføre de via 3D-slåssing, kanskje samle noe stæsj. Alt virker relativ kjent, og man kan undre på om Namco har funnet en liten nisje å plassere animé-spilladapsjoner i. Noe som gjør det hakket mer interessant er at man som tidligere nevnt spiller en (enda mer) ukjent helt (enn seriens hovedperson).
      Når jeg har loket rundt litt kommer jeg etter hvert i gang med historien, og det viser seg at vi spiller parallelt med mangaen. En par-tre småskurker får smekk på lanken, jeg hjelper en "salaryman" med å levere noen dokumenter, men så plutselig må byen evakueres på grunn av et særs kraftig monster! Siden jeg bare er en lusen C-rangs helt er det ingenting jeg kan gjøre for å bekjempe denne trusselen, og jeg blir beordret til å bistå i evakueringsprosessen. Men skulle man sett, på ett merkelig plot-relatert vis klarer jeg å befinne meg akkurat der monsteret bestemmer seg for å angripe neste gang, og kampen for tilværelsen kan begynne.
      Her skal spillet få skryt for at istedenfor en grusevanskelig slåsskamp hvor jeg ikke har sjans til å vinne, så presenterer de meg med en grusevanskelig slåsskamp hvor jeg ikke har sjans til å vinne - MEN de informerer meg om det på forhånd. Hele 30 sekunder må jeg holde ut for å unngå gravens klamme klem. Og det er her vi virkelig blir introdusert for spillets "gimmick" som skiller det fra de andre 3D-anime-actionspillene.
      One Punch Man: A Hero Nobody Knows
      Tidligere får man beskjed om at man kan forvente forsterkninger underveis i slåsskampene. En nedtelling dukker opp på siden av skjermen, og man kan se helten som kommer deg til unnsetning stadid komme nærmere. Etter å ha blitt banket sønder og sammen av "VACCINE MAN" (han er moder jords apostel, en konsekvens av all forurensingen vår, og skal ta hevn på hennes vegne) (ja, alle bakgrunnshistoriene er omtrent like teite, og det er herlig), får jeg beskjed om at en skallet og kappekledd person nærmer seg. Det er nemlig Saitama, og når han endelig dukker opp kan vi ta kontroll over han.
      Kampen ender som forventet etter ett slag og jeg blir pinlig klar over forskjellen mellom min vordende helt og den legendariske ett-slags mannen.
      Det finnes en rekke andre helter som kan dukke opp på dette viset, bestemt av "innflytelse"-verdien til helten min. Jo høyere verdi, jo større er sjansen for at en av seriens kraftigere helter gjør en opptreden. Morsomt er det jo, og jeg måtte le litt da Saitama selv tilfeldigvis dukket opp for å sette et punktum ved en veskenapping i et sideoppdrag. Snakk om overkill!
      Når jeg etter hvert har kommet meg gjennom en del hoved- og sideoppdrag låser jeg opp online-delen av spillet. Om man velger å spille tilkoblet nettet så får man se andre folk sine helter løpe rundt i spillverdenen. De kan også dukke opp som en av forsterkningene når man gjør sideoppdrag, så da kan man se hvordan andre spillere har satt sammen sine helter og - til min store underholdning - hvordan de har kledd de ut.
      For det er hvordan man kan tilpasse heltene som er kanskje det mest underholdende i dette spillet. Spesielt kombinert med den tidligere nevnte online-delen. Spillet byr på en bugnende overflod av gjenstander og klær jeg kan låse opp og sette på helten min. Selv om ansiktene er begrenset til forhåndsdesignede "masker" så kan man likevel lage veldig mye forskjellig. For alt av tilbehør kan ankres til omtrent hver eneste lem og X-Y-Z-justeres så jeg kan lage meg et akkurat så idiotisk utseende jeg vil.
      Så langt er nok min favoritt badering-mannen jeg så løpende rundt tidlig i spillet, som rett og slett hadde festet baderinger opp langs bena, armene, kroppen, og hodet sitt. Om du ser for deg en Michelin-mann bare i oransje og hvite striper kommer du farlig nært.
      Du kan såvidt glimte hen i bakgrunnen på bildet nedenfor:
      One Punch Man: A Hero Nobody Knows
      Såklart, spillet har en del å hente i selve slåsse-systemet. Det føles til tider litt stakkato, og jeg skulle ønske at det var litt mer flyt i sakene. Et cancel-system hadde nok gjort underverker her, for jeg føler meg svært bundet til hvilke angrep jeg har iverksatt. Ganske ofte havner enten jeg eller motstanderen i en slags stunlock, noe som ikke alltid er like gøy, spesielt om man spiller mot en venn i VS-modusen.
      Kanskje Spike Chunsoft kunne sett litt mer mot Ultimate Ninja Storm-serien, for der klarte Cyber Connect 2 virkelig å spikre slåssefølelsen fra første stund. Jeg våger meg ut på å håpe at Bandai Namco kan sette de to i kontakt neste gang.
      Enn så lenge er det ikke så mye i dette spillet som appellerer til de som ikke allerede er fans av One Punch Man. Dog, for dere som er det (undertegnede inkludert) finnes det masse moro å hente om man er villig til å overse et par blemmer.
    </p>
  </div>

<!--Articles-->
  <div class="container">
    <div id="redDead" class="item">
      <p>Red Dead Online update</p>
      <img class="panel" src="images/news1.png" alt="Red Dead Online">
    </div>

    <div id="E3" class="item">
      <p>E3 2020 has been canceled</p>
      <img class="panel" src="images/news2.png" alt="E2 2020">
    </div>

    <div id="ori" class="item">
      <p>Ori and the Will of the Wisps</p>
      <img class="panel" src="images/news3.png" alt="Ori and the Will of the Wisps">
    </div>

    <div id="amazon" class="item">
      <p>Amazon Prime Day 2020</p>
      <img class="panel" src="images/news4.png" alt="Amazon Prime Day 2020">
    </div>
  </div>

<!--Navbar-->
  <div id="nav" class="navbar">
    <a href="index.php">Home</a>
    <a href="hot.php">HOT</a>
  </div>
</body>
<footer>
  <script src="script.js" charset="utf-8"></script>
</footer>
</html>
