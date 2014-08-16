<?php

/* meetchatandplayProfilBundle:Profil:profil.html.twig */
class __TwigTemplate_648216dd9b6ef10fa6821cc48eb1a28093d062d6cc3f1fcf6b6d0b2ee09ba0d9 extends Twig_Template
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
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetConnecte") === true)) {
            // line 12
            echo "\t\t\t\t\t<span id = \"connecte\" style = \"position: fixed; margin-left: 95px; font-family: Comic Sans MS; font-size: 12px;\">En ligne</span>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t";
        if (((!($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius")) && (null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPhotoProfil")))) {
            // line 15
            echo "\t\t\t\t\t<center>
\t\t\t\t\t\t<img src='";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
            echo "' width = \"146px\" height = \"146px\" }}' />
\t\t\t\t\t</center>
\t\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius") && (!(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPhotoProfil"))))) {
                // line 20
                echo "\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<img src='";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
                echo "' width = \"146px\" height = \"146px\" }}' />
\t\t\t\t\t\t</center>
\t\t\t\t\t";
            } else {
                // line 24
                echo "\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<img src='";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Fabien.jpg"), "html", null, true);
                echo "' width = \"146px\" height = \"146px\" />
\t\t\t\t\t\t</center>
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t";
        }
        // line 29
        echo "\t\t\t</td>
\t\t</tr>
\t</table>
\t<table border = \"1\" width = \"816px\" height = \"150px\" style = \"margin-left: 165px;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 35
        if (((!($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius")) && (null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPhotoCouverture")))) {
            // line 36
            echo "\t\t\t\t\t<center>
\t\t\t\t\t\t<img src='";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/come_and_meet_me.jpg"), "html", null, true);
            echo "' width = \"812px\" height = \"146px\" }}' />
\t\t\t\t\t</center>
\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius") && (!(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPhotoCouverture"))))) {
                // line 41
                echo "\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<img src='";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/come_and_meet_me.jpg"), "html", null, true);
                echo "' width = \"812px\" height = \"146px\" }}' />
\t\t\t\t\t\t</center>
\t\t\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<img src='";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Couverture_Fabien.jpg"), "html", null, true);
                echo "' width = \"812px\" height = \"146px\" />
\t\t\t\t\t\t</center>
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t";
        }
        // line 50
        echo "\t\t\t</td>
\t\t</tr>
\t</table>
\t<table border = \"1\" width = \"150px\" height = \"335px\" style = \"margin-left: 15px; position: fixed;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t<center>
\t\t\t\t\t<h5><b style = \"font-family: Segoe Script; color:darkblue;\" title = \"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo"), "html", null, true);
        echo "</b></h5>
\t\t\t\t\t<div style = \"margin-top: 15px;\"></div>
\t\t\t\t\t";
        // line 59
        if ((!($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius"))) {
            // line 60
            echo "\t\t\t\t\t\t<img class = \"image_grade_profile\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGradeLienImage")) . ".png")), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGrade"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPoints"), "html", null, true);
            echo " points Meet obtenus\" />
\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t<img class = \"image_grade_profile\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGradeLienImage")) . "_Createur.png")), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGrade"), "html", null, true);
            echo " Créateur - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPoints"), "html", null, true);
            echo " points Meet obtenus\" />
\t\t\t\t\t";
        }
        // line 63
        echo "<br>
\t\t\t\t\t<div style = \"margin-top: 25px;\"></div>
\t\t\t\t\t<b>Médailles obtenues</b><br>
\t\t\t\t\t<div style = \"margin-top: 8px;\"></div>
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" style = \"margin-right: 5px;\"/>
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" style = \"margin-right: 5px;\" />
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medaille.png"), "html", null, true);
        echo "' title=\"\" /><br>
\t\t\t\t\t<img class = \"medaille\" src='";
        // line 70
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
\t\t\t\t\t<div style = \"margin-top: 25px;\"></div>
\t\t\t\t\t<b>Dernière connexion</b>
\t\t\t\t\t<div style = \"margin-top: 8px;\"></div>
\t\t\t\t\t";
        // line 79
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetConnecte") === true)) {
            // line 80
            echo "\t\t\t\t\t\t<font color = \"red\">Connecté</font>
\t\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t\t\t<font color = \"red\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetDerniereConnexion"), "H:i"), "html", null, true);
            echo "</font>
\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t</center>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<table border = \"1\" width = \"816px\" height = \"335px\" style = \"margin-left: 165px;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t<center>
\t\t\t\t\t
\t\t\t\t</center>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<script>
\t\tfunction cligno() {
\t\t\tif(document.getElementById(\"connecte\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte\").style.visibility='hidden';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte\").style.color='red';
\t\t\t}
\t\t}
\t\tvar timer = setInterval(\"cligno()\", 1500);
\t</script>
";
    }

    public function getTemplateName()
    {
        return "meetchatandplayProfilBundle:Profil:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 84,  221 => 82,  217 => 80,  215 => 79,  208 => 75,  204 => 74,  200 => 73,  196 => 72,  192 => 71,  188 => 70,  184 => 69,  180 => 68,  176 => 67,  170 => 63,  160 => 62,  150 => 60,  148 => 59,  141 => 57,  132 => 50,  129 => 49,  123 => 46,  120 => 45,  114 => 42,  111 => 41,  108 => 40,  102 => 37,  99 => 36,  97 => 35,  89 => 29,  86 => 28,  80 => 25,  77 => 24,  71 => 21,  68 => 20,  65 => 19,  59 => 16,  56 => 15,  53 => 14,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
