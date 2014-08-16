<?php

/* meetchatandplayProfilBundle:Profil:autre_profil.html.twig */
class __TwigTemplate_067de57137883c943c1023c86d297fd7384975f78969b35d1ed93980dbba96c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("meetchatandplayHomeHomeBundle::layout_meet.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "meetchatandplayHomeHomeBundle::layout_meet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<table border = \"1\" width = \"150px\" height = \"150px\" style = \"margin-left: 15px; position: fixed;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 11
        $context["limit"] = (twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "i") - 10);
        // line 12
        echo "\t\t\t\t";
        if ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "d/m/Y") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "H") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "H"))) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "i") > (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))))) {
            // line 13
            echo "\t\t\t\t\t<span id = \"connecte\" style = \"position: fixed; margin-left: 120px; margin-top: 115px; font-size: 12px;\"><ul style = \"font-size: 30px;\"><li>&nbsp;</li></ul></span>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t";
        if (((!($this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "pseudo") === "SirGladius")) && (null === $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetPhotoProfil")))) {
            // line 16
            echo "\t\t\t\t\t<center>
\t\t\t\t\t\t<img src='";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
            echo "' width = \"146px\" height = \"146px\" }}' />
\t\t\t\t\t</center>
\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "pseudo") === "SirGladius") && (!(null === $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetPhotoProfil"))))) {
                // line 21
                echo "\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<img src='";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
                echo "' width = \"146px\" height = \"146px\" }}' />
\t\t\t\t\t\t</center>
\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<img src='";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Fabien.jpg"), "html", null, true);
                echo "' width = \"146px\" height = \"146px\" />
\t\t\t\t\t\t</center>
\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t";
        }
        // line 30
        echo "\t\t\t</td>
\t\t</tr>
\t</table>
\t<table border = \"1\" width = \"816px\" height = \"150px\" style = \"margin-left: 165px;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 36
        if (((!($this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "pseudo") === "SirGladius")) && (null === $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetPhotoCouverture")))) {
            // line 37
            echo "\t\t\t\t\t<center>
\t\t\t\t\t\t<img src='";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/come_and_meet_me.jpg"), "html", null, true);
            echo "' width = \"812px\" height = \"146px\" }}' />
\t\t\t\t\t</center>
\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "pseudo") === "SirGladius") && (!(null === $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetPhotoCouverture"))))) {
                // line 42
                echo "\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<img src='";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/come_and_meet_me.jpg"), "html", null, true);
                echo "' width = \"812px\" height = \"146px\" }}' />
\t\t\t\t\t\t</center>
\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<img src='";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Couverture_Fabien.jpg"), "html", null, true);
                echo "' width = \"812px\" height = \"146px\" />
\t\t\t\t\t\t</center>
\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t";
        }
        // line 51
        echo "\t\t\t</td>
\t\t</tr>
\t</table>
\t<table border = \"1\" width = \"150px\" height = \"335px\" style = \"margin-left: 15px; position: fixed;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t<center>
\t\t\t\t\t<h5><b style = \"font-family: Segoe Script; color:darkblue;\" title = \"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "pseudo"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "pseudo"), "html", null, true);
        echo "</b></h5>
\t\t\t\t\t<div style = \"margin-top: 15px;\"></div>
\t\t\t\t\t";
        // line 60
        if ((!($this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "pseudo") === "SirGladius"))) {
            // line 61
            echo "\t\t\t\t\t\t<img class = \"image_grade_profile\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/" . $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetGradeLienImage")) . ".png")), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetGrade"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetPoints"), "html", null, true);
            echo " points Meet obtenus\" />
\t\t\t\t\t";
        } else {
            // line 63
            echo "\t\t\t\t\t\t<img class = \"image_grade_profile\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/" . $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetGradeLienImage")) . "_Createur.png")), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetGrade"), "html", null, true);
            echo " Créateur - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetPoints"), "html", null, true);
            echo " points Meet obtenus\" />
\t\t\t\t\t";
        }
        // line 64
        echo "<br>
\t\t\t\t\t<div style = \"margin-top: 25px;\"></div>
\t\t\t\t\t<b>Médailles obtenues</b><br>
\t\t\t\t\t<div style = \"margin-top: 8px;\"></div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 69
        if (array_key_exists("medaille", $context)) {
            // line 70
            echo "\t\t\t\t\t<img class = \"medaille\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
            echo "' title=\"\" style = \"margin-right: 5px;\"/>
\t\t\t\t\t<img class = \"medaille\" src='";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
            echo "' title=\"\" style = \"margin-right: 5px;\" />
\t\t\t\t\t<img class = \"medaille\" src='";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
            echo "' title=\"\" /><br>
\t\t\t\t\t<img class = \"medaille\" src='";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
            echo "' title=\"\" style = \"margin-right: 5px;\"/>
\t\t\t\t\t<img class = \"medaille\" src='";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
            echo "' title=\"\" style = \"margin-right: 5px;\" />
\t\t\t\t\t<img class = \"medaille\" src='";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
            echo "' title=\"\" /><br>
\t\t\t\t\t<img class = \"medaille\" src='";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
            echo "' title=\"\" style = \"margin-right: 5px;\"/>
\t\t\t\t\t<img class = \"medaille\" src='";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
            echo "' title=\"\" style = \"margin-right: 5px;\" />
\t\t\t\t\t<img class = \"medaille\" src='";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
            echo "' title=\"\" /><br>
\t\t\t\t\t<div style = \"margin-top: 25px;\"></div>
\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t<font color = \"red\">Aucune</font><br>
\t\t\t\t\t\t<div style = \"margin-top: 25px;\"></div>
\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t<b>Dernière connexion</b>
\t\t\t\t\t<div style = \"margin-top: 8px;\"></div>
\t\t\t\t\t";
        // line 86
        $context["limit"] = (twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "i") - 10);
        // line 87
        echo "\t\t\t\t\t";
        if (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "i") + 10) < 60)) {
            // line 88
            echo "\t\t\t\t\t\t";
            $context["leave"] = (twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "i") + 10);
            // line 89
            echo "\t\t\t\t\t\t";
            if ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "d/m/Y") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "H") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "H"))) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "i") > (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))))) {
                // line 90
                echo "\t\t\t\t\t\t\t<font color = \"red\">Connecté</font>
\t\t\t\t\t\t";
            } else {
                // line 92
                echo "\t\t\t\t\t\t\t<font color = \"red\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "H"), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, (isset($context["leave"]) ? $context["leave"] : $this->getContext($context, "leave")), "html", null, true);
                echo "</font>
\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t";
            $context["h"] = (twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "H") + 1);
            // line 96
            echo "\t\t\t\t\t\t";
            $context["leave"] = ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "i") + 10) - 60);
            // line 97
            echo "\t\t\t\t\t\t";
            if ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "d/m/Y") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "H") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "H"))) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "i") > (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))))) {
                // line 98
                echo "\t\t\t\t\t\t\t<font color = \"red\">Connecté</font>
\t\t\t\t\t\t";
            } else {
                // line 100
                echo "\t\t\t\t\t\t\t<font color = \"red\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "meetDerniereConnexion"), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : $this->getContext($context, "h")), "html", null, true);
                echo ":0";
                echo twig_escape_filter($this->env, (isset($context["leave"]) ? $context["leave"] : $this->getContext($context, "leave")), "html", null, true);
                echo "</font>
\t\t\t\t\t\t";
            }
            // line 102
            echo "\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t</center>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<table border = \"1\" width = \"816px\" height = \"335px\" style = \"margin-left: 165px;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t<center>
\t\t\t\t\t<div id=\"tabs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#tabs-1\">Nunc tincidunt</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tabs-2\">Proin dolor</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tabs-3\">Aenean lacinia</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div id=\"tabs-1\" style = \"min-height: 283px;\">
\t\t\t\t\t\t\t<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tabs-2\" style = \"min-height: 283px;\">
\t\t\t\t\t\t\t<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tabs-3\" style = \"min-height: 283px;\">
\t\t\t\t\t\t\t<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
\t\t\t\t\t\t\t<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</center>
\t\t\t</td>
\t\t</tr>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "meetchatandplayProfilBundle:Profil:autre_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 103,  281 => 102,  271 => 100,  267 => 98,  264 => 97,  261 => 96,  258 => 95,  255 => 94,  245 => 92,  241 => 90,  238 => 89,  235 => 88,  232 => 87,  230 => 86,  226 => 84,  221 => 81,  215 => 78,  211 => 77,  207 => 76,  203 => 75,  199 => 74,  195 => 73,  191 => 72,  187 => 71,  182 => 70,  180 => 69,  173 => 64,  163 => 63,  153 => 61,  151 => 60,  144 => 58,  135 => 51,  132 => 50,  126 => 47,  123 => 46,  117 => 43,  114 => 42,  111 => 41,  105 => 38,  102 => 37,  100 => 36,  92 => 30,  89 => 29,  83 => 26,  80 => 25,  74 => 22,  71 => 21,  68 => 20,  62 => 17,  59 => 16,  56 => 15,  52 => 13,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
