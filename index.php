<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IT-Ingrid (eller IT IN GRID om du vill!) | IT-Sveriges kalender och anslagstavla.</title>
  <link rel="stylesheet" href="design.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Ingrid - IT-Sveriges kalender!" />
  <meta property="og:description" content="Upptäck evenemang (ex. hackathons och Sweden Demo Day), läs om intressanta personer som gör bra saker, upptäck öppna data som myndigheter tillgängliggjort, läs mer om olika platser och hitta frilansare. Du kan också berätta om ditt/dina hobbyprojekt och läsa om vad andra bygger!"/>
  <meta property="og:url" content="https://itingrid.se"/>
</head>
<body id="page-index">

<script>
function countVisits() {
  localCount = localStorage.getItem("nPreviousVisits");
  if (localCount == null || localCount == "null"){
    count = 0;
  } else {
    count = parseInt(localCount);
  }
  count++;
  if(count > 3){
   document.body.id += "-returning-visitor";
  }
  localStorage.setItem("nPreviousVisits", count);
  console.log(count);
}
countVisits();
</script>

  <header>
    <h1>Ingrid</h1>
    <h2>Sveriges IT-kalender</h2>
  </header>

  <div id="calendar">
    <input type="checkbox" value="call-for-papers" id="filter-call-for-papers"> <label for="filter-call-for-papers">call for papers</label>
    <input type="checkbox" value="hackathon" id="filter-hackathon"> <label for="filter-hackathon">hackathon 👩🏽‍💻</label>
    <input type="checkbox" value="conference" id="filter-conference"> <label for="filter-conference">konferens</label>
    <input type="checkbox" value="meetup" id="filter-meetup"> <label for="filter-meetup">meetup</label>

    <br><br><br>

    <?php
      $events_json = file_get_contents("calendar-items.json");
      $calendar_events = json_decode($events_json);
      $items = "";
      foreach ($calendar_events as $event_item) {
        $items .= '<div class="calendar-item" data-type="' . $event_item->category . '">';
        $items .= "<h2>" . $event_item->headline . "</h2>";
        $items .= "<p>" . $event_item->date . "</p>";
        $items .= '<p class="tags">'.$event_item->tags.'</p>';
        $items .= '<h3>'.$event_item->description_headline.'</h3>';
        $items .= '<p>'.$event_item->description_first.'</p>';
        $items .= '<p>'.$event_item->description_second.'</p>';
        $items .= '<p><a href="'.$event_item->link.'" target="_blank">'.$event_item->link_text.'</a></p>';
        $items .= '</div>';
      }
      echo $items;
    ?>


      <p></p>

    <div class="calendar-item" data-type="hackathon">
      <h2>Hack the pressure</h2>
      <p>Piteå 15 februari 2020</p>
      <p><i>hackathon, hälsa, hårdvara</i></p>
      <h3>Hur kan vi genom innovation motverka kronisk stress och utbrändhet?</h3>
      <p>Är du en kreativ problemlösare eller tycker du om kodning? Har du en passion för att utforska, experimentera och skapa prototyper för att hitta de bästa lösningarna? Om svaret på dessa frågor är ja, är detta eventet för dig!</p>
      <p>Årets utmaning fokuserar på innovationer som motverkar kronisk stress och utbrändhet. Under det senaste decenniet har utbrändhet ökat och idag handlar var femte sjukskrivning om stress. I åldern 25-29 år har sjukantalet gått upp med 144% under de senaste sju åren.</p>
      <p>Tiden är knapp och bästa lösningarna belönas med presentkort på totalt 5000 kr. Bästa idé vinner 2500 kr och bästa tech-lösning 2500 kr.</p>
      <p><a href="https://morehack.se/#/apply/" target="_blank">Anmälan</a></p>
    </div>

    <span style="display: block;">Mars</span>


    <div class="calendar-item" data-type="hackathon">
      <h2>Cirkulär ekonomi</h2>
      <p>2 mars</p>
      <p class="tags">mini-hack</p>
      <h3>Hur kan vi genom innovation motverka kronisk stress och utbrändhet?</h3>
      <p>11:30-16:30. Plats: Gymnasieskolan Spyken.</p>
      <p>Målgrupp: Åk 3 gymnasiet samt studenter vid Lunds universitet.</p>
      <p><a href="https://service.lund.se/KF_80" target="_blank">Anmälan</a></p>
    </div>

    <div class="calendar-item">
      <h2>Foss North</h2>
      <p>Göteborg 29 mars till 1 april</p>
      <p>foss-north is a free / open source conference covering both software and hardware from the technical perspective. We provide a meeting place for the Nordic foss communities and will bring together great speakers with great audiences. We are constantly looking for partners, speakers, sponsors, and events around FOSS in the Nordic region. If you want to be listed here, please contact us at info -at- foss-gbg.se.</p>
    </div>

    <div class="calendar-item" data-type="conference">
      <h2>Nördreaktorn</h2>
      <p>Jönköping, lör 14 mars.<br>Pris: 295kr (frukost &amp; lunch ingår)</p>
      <p>Fem talare. Rubriker: AI, Robotics, Blockchain, Machine learning, Kubernetes.</p>
      <p>Blockchain: Saga kommer att berätta om olika projekt där hon använt blockchain, bland annat inom musikbranschen och inspirera dig till att komma igång med blockchain. Det finns fler möjligheter än bara crypto-currency till att använda blockchain, en distribuerad databas i ett peer-to-peer nätverk, för att enkelt beskriva begreppet.</p>
    </div>

    <span style="display: block;">April</span>

    <div class="calendar-item">
      <h2>Sweden Demo Day</h2>
      <p>Stockholm (Stockholmmässan), 2 april 2020</p>
      <p><i>startups, demo, idéer, stort, hitta nya användare, träffa investerare</i></p>
      <h3>Visa upp din nya affärsidé!</h3>
      <p>Är du en kreativ problemlösare och har kommit på en fantastiskt bra lösning för något?<br>
      Kom och visa upp den på Sweden Demo Day! Du får en 1m*2m stor yta att skriva på (eller sätta upp färdiga lappar/affischer.. designa den som du vill!</p>
      <p>Besökare (potentiella framtida partners och medarbetare, investerare och kanske framtida ambassadörer och kunder (!) går runt och spanar in alla lösningar som presenteras!</p>
      <p><a href="https://www.swedendemoday.com/" target="_blank">Mer information och anmälan</a></p>
    </div>


    <div class="calendar-item">
      <h2>SKåne Innovation Days</h2>
      <p>15 -16 april</p>
      <p>Region Skåne bjuder för sjunde gången in till Skåne Innovation Day – nytt för årets upplaga är att de växlar upp och utökar till två heldagar med olika koncept, mötesformat och mer fokus på interaktion och dialog. Även platsen är ny då eventet efter 4 år i Varvsstaden, landar in I Malmö, Folkets Park och blir en del av allt spännande som händer under Innocarnival Skåne.</p>
      <a href="https://www.krinova.se/event/skane-innovation-days-2020/">Läs mer</a>
    </div>

    <span style="display: block;">Maj</span>
    <div class="calendar-item">
      <h2>STOCKHOLM TECH JOB FAIR BY TECHMEETUPS</h2>
      <p>Stockholm, 28 maj</p>
      <p>Läs mer <a href="https://www.eventbrite.co.uk/e/stockholm-tech-job-fair-spring-2020-by-techmeetups-tickets-76819987651">eventbrite</a>.</p>
    </div>

    <div class="calendar-item">
      <h2>Code BEAM STO 2020</h2>
      <p>Stockholm, 28-29 maj</p>
      <p>Läs mer hos <a href="https://www.eventbrite.co.uk/e/code-beam-sto-2020-tickets-90357035325">eventbrite</a>.</p>
    </div>

  </div>

  <div id="hello-reason">
    <p>👋🏽 Hej!</p>
    <p>Jag vill själv få en notis när ett hackathon är på gång i Uppsala, eller om ett hackathon som rör sådant jag är intresserad av sker (oavsett var i landet).</p>
    <p>
    Jag har träffat så många människor som gör bra saker och hört talas om spännande projekt som inte alls får den uppmärksamhet de förtjänar.</p>
    <p>
    Träffar också många personer som vill komma igång och börja lära sig programmering, och ännu fler som har kommit igång men som inte vet hur de ska komma vidare för att få det där första jobbet, eller första praktikplatsen.
      Är också själv engagerad i många olika sammanhang och vet vilket jättejobb det är att rodda med meetups och vinterläger för att de över huvudtaget ska bli av - låt oss vara fler som får upp ögonen för att en liten insats kan göra stor skillnad!
    </p>
    <p>
    När människor möts händer det bra saker, det är jag övertygad om. Jag hoppas att Ingrid så småningom kommer växa upp och klara sig gott utan mig. :]<br><br>
      // <a href="https://victoriawagman.se" style="text-decoration: none;">Victoria</a>
    </p>
  </div>

  <div id="contribute">
    <p>Du kan också bidra till denna hemsida genom att <a href="mailto:victoria@kodkurs.se">skicka in förslag</a> eller själv <a href="https://github.com/littlekid/itingrid" target="_blank">lägga till innehåll (gör en pull request) → </a>.</p>
  </div>
</body>
</html>
