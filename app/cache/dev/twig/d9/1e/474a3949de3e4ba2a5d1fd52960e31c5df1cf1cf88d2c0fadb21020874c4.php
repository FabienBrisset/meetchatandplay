<?php

/* meetchatandplayProfilBundle:Profil:mon_profil.html.twig */
class __TwigTemplate_d91e474a3949de3e4ba2a5d1fd52960e31c5df1cf1cf88d2c0fadb21020874c4 extends Twig_Template
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
        if ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "d/m/Y") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "H") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "H"))) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "i") > (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))))) {
            // line 13
            echo "\t\t\t\t\t<span id = \"connecte\" style = \"position: fixed; margin-left: 120px; margin-top: 115px; font-size: 12px;\"><ul style = \"font-size: 30px;\"><li>&nbsp;</li></ul></span>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t";
        if (((!($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius")) && (null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPhotoProfil")))) {
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
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius") && (!(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPhotoProfil"))))) {
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
        if (((!($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius")) && (null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPhotoCouverture")))) {
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
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius") && (!(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPhotoCouverture"))))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo"), "html", null, true);
        echo "</b></h5>
\t\t\t\t\t<div style = \"margin-top: 15px;\"></div>
\t\t\t\t\t";
        // line 60
        if ((!($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius"))) {
            // line 61
            echo "\t\t\t\t\t\t<img class = \"image_grade_profile\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGradeLienImage")) . ".png")), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGrade"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPoints"), "html", null, true);
            echo " points Meet obtenus\" />
\t\t\t\t\t";
        } else {
            // line 63
            echo "\t\t\t\t\t\t<img class = \"image_grade_profile\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGradeLienImage")) . "_Createur.png")), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGrade"), "html", null, true);
            echo " Créateur - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPoints"), "html", null, true);
            echo " points Meet obtenus\" />
\t\t\t\t\t";
        }
        // line 64
        echo "<br>
\t\t\t\t\t<div style = \"margin-top: 25px;\"></div>
\t\t\t\t\t<b>Médailles obtenues</b><br>
\t\t\t\t\t<div style = \"margin-top: 8px;\"></div>
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" style = \"margin-right: 5px;\"/>
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" style = \"margin-right: 5px;\" />
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" /><br>
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" style = \"margin-right: 5px;\"/>
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" style = \"margin-right: 5px;\" />
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" /><br>
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" style = \"margin-right: 5px;\"/>
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" style = \"margin-right: 5px;\" />
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" /><br>
\t\t\t\t\t<div style = \"margin-top: 25px;\"></div>
\t\t\t\t\t<b>Dernière connexion</b>
\t\t\t\t\t<div style = \"margin-top: 8px;\"></div>
\t\t\t\t\t";
        // line 80
        $context["limit"] = (twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "i") - 10);
        // line 81
        echo "\t\t\t\t\t";
        $context["leave"] = (twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "i") + 10);
        // line 82
        echo "\t\t\t\t\t";
        if ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "d/m/Y") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "H") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "H"))) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "i") > (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))))) {
            // line 83
            echo "\t\t\t\t\t\t<font color = \"red\">Connecté</font>
\t\t\t\t\t";
        } else {
            // line 85
            echo "\t\t\t\t\t\t<font color = \"red\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "H"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, (isset($context["leave"]) ? $context["leave"] : $this->getContext($context, "leave")), "html", null, true);
            echo "</font>
\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t</center>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<table border = \"1\" width = \"816px\" height = \"335px\" style = \"margin-left: 165px;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div id=\"tabs\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#tabs-1\">&nbsp;&nbsp;&nbsp;&nbsp;Informations&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t\t<li><a href=\"#tabs-2\">&nbsp;&nbsp;&nbsp;&nbsp;Photos&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t\t<li><a href=\"#tabs-3\">&nbsp;&nbsp;&nbsp;&nbsp;Vidéos&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t\t<li><a href=\"#tabs-4\">&nbsp;&nbsp;&nbsp;&nbsp;Amis&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t\t<li><a href=\"#tabs-5\">&nbsp;&nbsp;&nbsp;Meets&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t\t<li><a href=\"#tabs-6\">&nbsp;&nbsp;&nbsp;&nbsp;Friendly Meets&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"tabs-1\" style = \"min-height: 283px;\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<table border = \"0\" width = \"807px\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"tabs2\" style = \"margin-left: 5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style = \"margin-right: 4.73px; margin-left: 3.5px;\"><a href=\"#tabs-7\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = \"1px;\">Généralités</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style = \"margin-right: 4.73px;\"><a href=\"#tabs-8\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = \"1px;\">Statut</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style = \"margin-right: 4.73px;\"><a href=\"#tabs-9\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = \"1px;\">Questionnaire du Meeter</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tabs-10\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = \"1px;\">Précisions</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"tabs-7\" style = \"min-height: 240px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>a</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"tabs-8\" style = \"min-height: 240px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>b</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"tabs-9\" style = \"min-height: 240px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>c</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"tabs-10\" style = \"min-height: 240px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>d</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"tabs-2\" style = \"min-height: 283px;\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<table border = \"0\" width = \"807px\">
\t\t\t\t\t\t\t\t</table>e
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"tabs-3\" style = \"min-height: 283px;\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<table border = \"0\" width = \"807px\">
\t\t\t\t\t\t\t\t</table>d
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"tabs-4\" style = \"min-height: 283px;\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<table border = \"0\" width = \"807px\">
\t\t\t\t\t\t\t\t</table>c
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"tabs-5\" style = \"min-height: 283px;\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<table border = \"0\" width = \"807px\">
\t\t\t\t\t\t\t\t</table>b
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"tabs-6\" style = \"min-height: 283px;\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<table border = \"0\" width = \"807px\">
\t\t\t\t\t\t\t\t</table>a
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "meetchatandplayProfilBundle:Profil:mon_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 87,  230 => 85,  226 => 83,  223 => 82,  220 => 81,  218 => 80,  211 => 76,  207 => 75,  203 => 74,  199 => 73,  195 => 72,  191 => 71,  187 => 70,  183 => 69,  179 => 68,  173 => 64,  163 => 63,  153 => 61,  151 => 60,  144 => 58,  135 => 51,  132 => 50,  126 => 47,  123 => 46,  117 => 43,  114 => 42,  111 => 41,  105 => 38,  102 => 37,  100 => 36,  92 => 30,  89 => 29,  83 => 26,  80 => 25,  74 => 22,  71 => 21,  68 => 20,  62 => 17,  59 => 16,  56 => 15,  52 => 13,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
