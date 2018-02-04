<?php

namespace App\Presenters;

use Nette;


class SnekejsPresenter extends BasePresenter
{
  private $snailsNames;
  private $snailsLongNames = array();
  private $snailsDescriptions = array();
  private $snails = array();

  public function __construct()
    {
        $this->snailsNames = array("acaacu", "aegmin", "aegpur", "ariarb");
        $this->snailsLongNames = array("<i>Acanthinula aculeata</i> –&nbsp;ostnatka trnitá", "<i>Aegopinella minor </i>– sítovka suchomilná", "<i>Aegopinella pura</i> –&nbsp;sítovka čistá", "<i>Arianta arbustorum</i> –&nbsp;plamatka lesní");
        $this->snailsDescriptions = array("<p>Kuželovitá schránka <i>A. aculeata</i> dosahuje průměru i&nbsp;výšky okolo 2&nbsp;mm, má hnědavé zbarvení. Může na sobě mít periostrakální žebírka s&nbsp;trny. Tělo plže je šedivé, zespodu bílé.</p>
<p>Žije v&nbsp;zachovalých listnatých lesích, v&nbsp;křovinách, v&nbsp;opadu a&nbsp;pod tlejícím dřevem. Vyhledává stinná místa a&nbsp;dává přednost substrátu s&nbsp;vyšším obsahem vápníku (AnimalBase Project Group 2005).</p>", "<p>Průměr ulity tohoto plže činí až 9&nbsp;mm. Ulita je plochá, nevýrazného zbarvení, bez důraznější struktury.</p>
<p>Obývá i&nbsp;suchá stanoviště. Je možné ji nalézt v&nbsp;lesích s&nbsp;kyselejším substrátem, křovinách a&nbsp;polootevřených stanovištích. Žije i&nbsp;v&nbsp;osídlených oblastech (Horsák <i>et al.</i> 2013, s. 102).</p>", "<p>Jedná se o nejmenší druh sítovky u&nbsp;nás, dorůstá jen 4,6&nbsp;mm. Lze ji rozeznat podle mřížkovité struktury na povrchu ulity, která zapříčiňuje její matný lesk. Ulita má čočkovitý tvar a&nbsp;tupý kýl na obvodu (Horsák <i>et al.</i> 2013, s. 101).</p>
<p>Žije v&nbsp;lesním opadu od nížin do hor.</p>
<p>O obou sítovkách v&nbsp;lokalitě se dá říci, že poněkud nekorespondují s&nbsp;názvem: <i>A. minor</i> (lat. menší) je větší než <i>A. pura</i>, <i>A. pura</i> (lat. čistá) zase nemá čistý povrch. Sítovky lze obecně spolehlivě determinovat pouze pitvou dle anatomických znaků pohlavní soustavy.</p>", "<p>České rodové jméno tohoto plže se vztahuje ke kropenatému vzhledu ulity. Plamatý totiž znamená skvrnitý (Ústav pro jazyk český AV ČR 2011), podobně jako například v&nbsp;názvu bolehlavu plamatého* (<i>Conium maculatum</i>) či árónu plamatého (<i>Arum maculatum</i>). Barevnost ulity bývá různá. v&nbsp;horách lze nalézt světlé či žluté jedince, ale jinak bývá ulita zpravidla tmavá. U&nbsp;dospělce je velká až 24&nbsp;mm. Samotné tělo plže je potom černé.</p>
<p>Jedná se o vlhkomilného plže obývajcího zejména lesní prostředí. Plamatka má středoevropsko­‑subatlantické rozšíření. Introdukována byla do východní Kanady (McAlpine a&nbsp;Forsyth 2014).</p>
<p>* Právě skvrny na stonku bolehlavu tuto rostlinu zcela jasně odlišují od našich ostatních miříkovitých (Apiaceae).</p>");

        foreach ($this->snailsNames as $key => $value) {
          $this->snails[$key][0] = $value;
          $this->snails[$key][1] = $this->snailsLongNames[$key];
          $this->snails[$key][2] = $this->snailsDescriptions[$key];
          $this->snails[$key][3] = "../content/" . $this->snailsNames[$key] . ".jpg";
        }
    }

  public function renderDefault()
  {
      $this->template->snails = $this->snails;
  }
}
