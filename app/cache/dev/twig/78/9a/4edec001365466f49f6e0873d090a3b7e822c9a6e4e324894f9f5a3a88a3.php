<?php

/* ::layout_meet.html.twig */
class __TwigTemplate_789a4edec001365466f49f6e0873d090a3b7e822c9a6e4e324894f9f5a3a88a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javasripts' => array($this, 'block_javasripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (array_key_exists("connecte", $context)) {
            // line 2
            echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fav.ico"), "html", null, true);
            echo "\" />

    <title>";
            // line 8
            $this->displayBlock('title', $context, $blocks);
            echo "</title> 

    ";
            // line 10
            $this->displayBlock('stylesheets', $context, $blocks);
            // line 15
            echo "  </head>

  <body>
\t<header>
\t\t<div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<div id='homepage' class='navbar-brand' title=\"Meet, Chat & Play\">
\t\t\t\t\t\t<a style = \"margin-right: 15px;\" href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("meetchatandplay_meet_homepage");
            echo "\"><img class = \"image_breadcrumb\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.png"), "html", null, true);
            echo "\" /></a>
\t\t\t\t\t\t<a id = \"nom_site\" href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("meetchatandplay_meet_homepage");
            echo "\"><b style = \"font-size: 20px;\">Meet</b>, Chat & Play</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"collapse navbar-collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav\" style = \"margin-top: 2px; margin-left: 15px;\"> 
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo "\" title=\"Recherchez les Meeters qui correspondent à vos critères !\">Le paradis des Meeters</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo "\" title=\"Interagissez avec vos amis !\">Vos Amis Meeters</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo "\" title=\"Visualisez vos rencontres amoureuses !\">Vos Meets</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo "\" title=\"Visualisez vos rencontres amicales !\">Vos Friendly Meets</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo "\" title=\"Soyez Swag ! Devenez VIP !\">Devenir VIP</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo "\" title=\"Montrez votre coeur, faîtes un don pour le site !\">Faire un don</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id = \"lien_profil\" href = \"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("meetchatandplay_meet_mon_profil");
            echo "\" title=\"Mettez à jour votre profil afin d'attirer les Meeters qui vous correspondent !\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li style = \"margin-top: 5px; margin-right: 15px;\">
\t\t\t\t\t\t\t";
            // line 53
            if ((!($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo") === "SirGladius"))) {
                // line 54
                echo "\t\t\t\t\t\t\t\t<img class = \"image_breadcrumb\" src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGradeLienImage")) . ".png")), "html", null, true);
                echo "' title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGrade"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPoints"), "html", null, true);
                echo " points Meet obtenus\"\" />
\t\t\t\t\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t\t\t\t\t<img class = \"image_breadcrumb\" src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGradeLienImage")) . "_Createur.png")), "html", null, true);
                echo "' title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetGrade"), "html", null, true);
                echo " Créateur - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "meetPoints"), "html", null, true);
                echo " points Meet obtenus\"\" />
\t\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div id = \"logout\">
\t\t\t\t\t\t\t\t<form action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_disconnection", array("pseudo" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo"), "mot_de_passe" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "motDePasse"))), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\">Déconnexion <i class=\"icon-white glyphicon glyphicon-off\"></i> </button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"navbar navbar-default navbar_derniers_inscrits\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<h6 style = \"display: inline; margin-right: 26px;\"><b>Derniers Meeters inscrits</b></h6>
\t\t\t\t\t";
            // line 74
            $context["cpt"] = 0;
            // line 75
            echo "\t\t\t\t\t";
            if (array_key_exists("derniers_inscrits", $context)) {
                // line 76
                echo "\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["derniers_inscrits"]) ? $context["derniers_inscrits"] : $this->getContext($context, "derniers_inscrits")));
                foreach ($context['_seq'] as $context["_key"] => $context["inscrit"]) {
                    // line 77
                    echo "\t\t\t\t\t\t\t";
                    $context["limit"] = (twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "i") - 10);
                    // line 78
                    echo "\t\t\t\t\t\t\t";
                    if ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "meetDerniereConnexion"), "d/m/Y") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "meetDerniereConnexion"), "H") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "H"))) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "meetDerniereConnexion"), "i") > (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))))) {
                        // line 79
                        echo "\t\t\t\t\t\t\t\t<span id = 'connecte_";
                        echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
                        echo "' style = \"position: fixed; margin-left: 21px;\"><ul style = \"font-size: 18px;\"><li>&nbsp;</li></ul></span>
\t\t\t\t\t\t\t";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t\t";
                    if (((!($this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "pseudo") === "SirGladius")) && (null === $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "meetPhotoProfil")))) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t<a href = \"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_autre_profil", array("pseudo" => $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "pseudo"))), "html", null, true);
                        echo "\"><img src='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
                        echo "' width = \"50px\" height = \"50px\" }}' style = \"margin-right:15px;\" title = \"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "pseudo"), "html", null, true);
                        echo "\" /></a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t";
                        if ((($this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "pseudo") === "SirGladius") && (!(null === $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "meetPhotoProfil"))))) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t<a href = \"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_autre_profil", array("pseudo" => $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "pseudo"))), "html", null, true);
                            echo "\"><img src='";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
                            echo "' width = \"50px\" height = \"50px\" }}' style = \"margin-right:15px;\" title = \"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "pseudo"), "html", null, true);
                            echo "\" /></a>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t<a href = \"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_autre_profil", array("pseudo" => $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "pseudo"))), "html", null, true);
                            echo "\"><img src='";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Fabien.jpg"), "html", null, true);
                            echo "' width = \"50px\" height = \"50px\" style = \"margin-right:15px;\" title = \"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "pseudo"), "html", null, true);
                            echo "\" /></a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 89
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t";
                    $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
                    // line 91
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t<div style = \"background-color: #ffe8e8; margin-top: 105px; min-height: 1300px; position: fixed;\">
\t\t<div style = \"margin-top: 12px;\"></div>
\t\t<h6 style = \"display: inline; margin-left: 30px; margin-right: 30px;\"><b>Derniers Meeters VIP</b></h6><br>
\t\t<div style = \"margin-top: 12px;\"></div>
\t\t<center>
\t\t\t";
            // line 102
            $context["cpt"] = 21;
            // line 103
            echo "\t\t\t";
            if (array_key_exists("derniers_vip", $context)) {
                // line 104
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["derniers_vip"]) ? $context["derniers_vip"] : $this->getContext($context, "derniers_vip")));
                foreach ($context['_seq'] as $context["_key"] => $context["vip"]) {
                    // line 105
                    echo "\t\t\t\t\t";
                    $context["limit"] = (twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "i") - 10);
                    // line 106
                    echo "\t\t\t\t\t";
                    if ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "meetDerniereConnexion"), "d/m/Y") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "meetDerniereConnexion"), "H") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "H"))) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "meetDerniereConnexion"), "i") > (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))))) {
                        // line 107
                        echo "\t\t\t\t\t\t<span id = 'connecte_";
                        echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
                        echo "' style = \"position: fixed; margin-left: 45px;\"><ul style = \"font-size: 20px;\"><li>&nbsp;</li></ul></span>
\t\t\t\t\t";
                    }
                    // line 109
                    echo "\t\t\t\t\t";
                    if (((!($this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "pseudo") === "SirGladius")) && (null === $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "meetPhotoProfil")))) {
                        // line 110
                        echo "\t\t\t\t\t\t<a href = \"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_autre_profil", array("pseudo" => $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "pseudo"))), "html", null, true);
                        echo "\"><img src='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
                        echo "' width = \"80px\" height = \"80px\" }}' style = \"margin-bottom: 15px;\" title = \"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "pseudo"), "html", null, true);
                        echo "\" /></a><br>
\t\t\t\t\t";
                    } else {
                        // line 112
                        echo "\t\t\t\t\t\t";
                        if ((($this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "pseudo") === "SirGladius") && (!(null === $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "meetPhotoProfil"))))) {
                            // line 113
                            echo "\t\t\t\t\t\t\t<a href = \"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_autre_profil", array("pseudo" => $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "pseudo"))), "html", null, true);
                            echo "\"><img src='";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
                            echo "' width = \"80px\" height = \"80px\" }}' style = \"margin-bottom: 15px;\" title = \"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "pseudo"), "html", null, true);
                            echo "\" /></a><br>
\t\t\t\t\t\t";
                        } else {
                            // line 115
                            echo "\t\t\t\t\t\t\t<a href = \"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_autre_profil", array("pseudo" => $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "pseudo"))), "html", null, true);
                            echo "\"><img src='";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Fabien.jpg"), "html", null, true);
                            echo "' width = \"80px\" height = \"80px\" style = \"margin-bottom: 15px;\" title = \"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "pseudo"), "html", null, true);
                            echo "\" /></a><br>
\t\t\t\t\t\t";
                        }
                        // line 117
                        echo "\t\t\t\t\t";
                    }
                    // line 118
                    echo "\t\t\t\t\t";
                    $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
                    // line 119
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vip'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "\t\t\t";
            }
            // line 121
            echo "\t\t</center>
\t</div>
\t<div style = \"background-color: #d1fffd; margin-top: 105px; min-height: 1300px; min-width: 995px; position: fixed; margin-left: 181px;\">
\t\t<div style = \"margin-top: 12px;\"></div>
\t\t";
            // line 125
            $this->displayBlock('body', $context, $blocks);
            // line 127
            echo "\t</div>
\t<div style = \"background-color: #ffe8e8; margin-top: 105px; min-height: 1300px; position: fixed; margin-left: 1176px;\">
\t\t<div style = \"margin-top: 12px;\"></div>
\t\t<h6 style = \"display: inline; margin-left: 15px; margin-right: 15px;\"><b>Derniers Meeters donateurs</b></h6><br>
\t\t<div style = \"margin-top: 12px;\"></div>
\t\t<center>
\t\t\t";
            // line 133
            $context["cpt"] = 26;
            // line 134
            echo "\t\t\t";
            if (array_key_exists("derniers_donateurs", $context)) {
                // line 135
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["derniers_donateurs"]) ? $context["derniers_donateurs"] : $this->getContext($context, "derniers_donateurs")));
                foreach ($context['_seq'] as $context["_key"] => $context["donateur"]) {
                    // line 136
                    echo "\t\t\t\t\t";
                    $context["limit"] = (twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "i") - 10);
                    // line 137
                    echo "\t\t\t\t\t";
                    if ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "meetDerniereConnexion"), "d/m/Y") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "meetDerniereConnexion"), "H") === twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "H"))) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "meetDerniereConnexion"), "i") > (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))))) {
                        // line 138
                        echo "\t\t\t\t\t\t<span id = 'connecte_";
                        echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
                        echo "' style = \"position: fixed; margin-left: 45px;\"><ul style = \"font-size: 20px;\"><li>&nbsp;</li></ul></span>
\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t\t";
                    if (((!($this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "pseudo") === "SirGladius")) && (null === $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "meetPhotoProfil")))) {
                        // line 141
                        echo "\t\t\t\t\t\t<a href = \"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_autre_profil", array("pseudo" => $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "pseudo"))), "html", null, true);
                        echo "\"><img src='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
                        echo "' width = \"80px\" height = \"80px\" }}' style = \"margin-bottom: 15px;\" title = \"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "pseudo"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "meetDon"), "html", null, true);
                        echo "€ de don\" /></a><br>
\t\t\t\t\t";
                    } else {
                        // line 143
                        echo "\t\t\t\t\t\t";
                        if ((($this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "pseudo") === "SirGladius") && (!(null === $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "meetPhotoProfil"))))) {
                            // line 144
                            echo "\t\t\t\t\t\t\t<a href = \"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_autre_profil", array("pseudo" => $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "pseudo"))), "html", null, true);
                            echo "\"><img src='";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.jpg"), "html", null, true);
                            echo "' width = \"80px\" height = \"80px\" }}' style = \"margin-bottom: 15px;\" title = \"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "pseudo"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "meetDon"), "html", null, true);
                            echo "€ de don\" /></a><br>
\t\t\t\t\t\t";
                        } else {
                            // line 146
                            echo "\t\t\t\t\t\t\t<a href = \"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetchatandplay_meet_autre_profil", array("pseudo" => $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "pseudo"))), "html", null, true);
                            echo "\"><img src='";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Fabien.jpg"), "html", null, true);
                            echo "' width = \"80px\" height = \"80px\" style = \"margin-bottom: 15px;\" title = \"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "pseudo"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donateur"]) ? $context["donateur"] : $this->getContext($context, "donateur")), "meetDon"), "html", null, true);
                            echo "€ de don\" /></a><br>
\t\t\t\t\t\t";
                        }
                        // line 148
                        echo "\t\t\t\t\t";
                    }
                    // line 149
                    echo "\t\t\t\t\t";
                    $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
                    // line 150
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['donateur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "\t\t\t";
            }
            // line 152
            echo "\t\t</center>
\t</div>
\t<footer class = \"row\">
\t\t<div class=\"navbar navbar-default navbar-fixed-bottom\" align = \"center\">
\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t<li style = \"margin-top: 15px;\">
\t\t\t\t\t<div name = \"zone_calendar\" id = \"zone_calendar\" style = \"display: inline; margin-right: 400px;\">";
            // line 158
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y"), "html", null, true);
            echo "</div>
\t\t\t\t\t<i class=\"icon-white glyphicon glyphicon-arrow-right\" style = \"font-weight: bold; margin-right: 15px;\"></i>Site imaginé, conçu et administré par Fabien BRISSET<i class=\"icon-white glyphicon glyphicon-arrow-left\" style = \"font-weight: bold; margin-left: 15px;\"></i>
\t\t\t\t\t<div name = \"zone_clock\" id = \"zone_clock\" style = \"display: inline; margin-left: 390px;\">";
            // line 160
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "H:i"), "html", null, true);
            echo "</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</footer>
 </body>
  
  ";
            // line 167
            $this->displayBlock('javasripts', $context, $blocks);
            // line 600
            echo "</html>
";
        } else {
            // line 602
            echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Meet, Chat & Play - Meet</title> 
\t\t<link rel=\"stylesheet\" href=\"";
            // line 606
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
            echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
            // line 607
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
            echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
            // line 608
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/carousel.css"), "html", null, true);
            echo "\" />
\t</head>
\t<body>
\t\t<header>
\t\t\t";
            // line 612
            if (array_key_exists("erreur", $context)) {
                // line 613
                echo "\t\t\t\t<h4 id = \"erreur\">";
                echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
                echo "</h4>
\t\t\t";
            }
            // line 615
            echo "\t\t\t<ul class=\"pager\">
\t\t\t  <li><a href=\"";
            // line 616
            echo $this->env->getExtension('routing')->getPath("meetchatandplay_home_homepage");
            echo "\">Retourner au Menu Principal</a></li>
\t\t\t</ul>
\t\t</header>
\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"carousel-caption\" style = \"margin-bottom: 50px;\">
\t\t\t\t\t\t\t<h1 id = \"carousel_meet_love\">Meet Love</h1>
\t\t\t\t\t\t\t<p>Rencontrez des personnes qui ont les mêmes affinités que vous !<br>
\t\t\t\t\t\t\tTissez des liens avec des individus provenants de tous les horizons !<br>
\t\t\t\t\t\t\tSoyez vous-même et trouvez enfin l'amour !</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"carousel-caption\" style = \"margin-bottom: 10px;\">
\t\t\t\t\t\t\t<h1 id = \"connectez_vous\">Connectez-vous</h1><br>
\t\t\t\t\t\t\t<form action = \"";
            // line 635
            echo $this->env->getExtension('routing')->getPath("meetchatandplay_meet_homepage");
            echo "\" method = \"POST\">
\t\t\t\t\t\t\t\t<label for = \"pseudo\"><div style = \"margin-right: 41px; display: inline;\">Pseudo</div>
\t\t\t\t\t\t\t\t<input type = \"text\" name = \"pseudo\" id = \"pseudo\" pattern = \"[a-zA-Z0-9éèàùîôòìê_\\-]{1,12}\" style = \"margin-bottom: 15px; color: #6398ef;\" required /><br>
\t\t\t\t\t\t\t\t<label for = \"mot_de_passe\">Mot de passe
\t\t\t\t\t\t\t\t<input type = \"password\" name = \"mot_de_passe\" id = \"mot_de_passe\" pattern = \"[a-zA-Z0-9éèàùîôòìê_\\-]{1,60}\" style = \"margin-bottom: 15px; color: #6398ef;\" required /><br>
\t\t\t\t\t\t\t\t<input type = \"submit\" name = \"connexion\" value = \"Valider\" style = \"color: #6398ef;\" /><br><br>
\t\t\t\t\t\t\t\t<input type = \"checkbox\" name = \"rester_connecte\" style = \"margin-right: 10px;\" />Rester connecté<br>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"container_maison\">
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h1 id = \"inscrivez_vous\">Inscrivez-vous</h1><br>
\t\t\t\t\t\t\t<form action = \"";
            // line 650
            echo $this->env->getExtension('routing')->getPath("meetchatandplay_meet_homepage");
            echo "\" method = \"POST\">
\t\t\t\t\t\t\t\t<label for = \"pseudo\"><div style = \"margin-right: 117px; display: inline;\">Pseudo</div>
\t\t\t\t\t\t\t\t<input type = \"text\" name = \"pseudo\" id = \"pseudo\" pattern = \"[a-zA-Z0-9éèàùîôòìê_\\-@]{1,12}\" style = \"margin-bottom: 15px; color: #6398ef;\" required /><br>
\t\t\t\t\t\t\t\t<label for = \"mot_de_passe\"><div style = \"margin-right: 76px; display: inline;\">Mot de passe</div>
\t\t\t\t\t\t\t\t<input type = \"password\" name = \"mot_de_passe\" id = \"mot_de_passe\" pattern = \"[a-zA-Z0-9éèàùîôòìê_\\-]{1,60}\" style = \"margin-bottom: 15px; color: #6398ef;\" required /><br>
\t\t\t\t\t\t\t\t<label for = \"mot_de_passe\">Retapez le mot de passe
\t\t\t\t\t\t\t\t<input type = \"password\" name = \"mot_de_passe2\" id = \"mot_de_passe2\" pattern = \"[a-zA-Z0-9éèàùîôòìê_\\-]{1,60}\" style = \"margin-bottom: 15px; color: #6398ef;\" required /><br>
\t\t\t\t\t\t\t\t<input type = \"submit\" name = \"inscription\" value = \"Valider\" style = \"color: #6398ef;\" /><br><br>
\t\t\t\t\t\t\t\t<input type = \"checkbox\" name = \"chat\" style = \"margin-right: 10px;\" />S'inscrire également sur la partie réseau social du site<br>
\t\t\t\t\t\t\t\t<input type = \"checkbox\" name = \"play\" style = \"margin-right: 10px;\" />S'inscrire également sur la partie jeu du site
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t\t</a>
\t\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t\t</a>
\t\t</div>
\t\t
\t\t<script src=\"";
            // line 673
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
            echo "\"></script>
\t\t<script src=\"";
            // line 674
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
\t\t<script src=\"";
            // line 675
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
            echo "\"></script>
\t</body>
</html>

";
        }
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Meet, Chat & Play - Meet";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/carousel.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 125
    public function block_body($context, array $blocks = array())
    {
        // line 126
        echo "\t\t";
    }

    // line 167
    public function block_javasripts($context, array $blocks = array())
    {
        echo " 
\t<script>\t
\t\tfunction cligno_0() {
\t\t\tif(document.getElementById(\"connecte\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte\").style.visibility='hidden';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte\").style.color='#2aff00';
\t\t\t}
\t\t}
\t\tvar timer = setInterval(\"cligno_0()\", 600);
\t\t
\t\tfunction cligno_1() {
\t\t\tif(document.getElementById(\"connecte_0\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_0\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_0\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_0\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_0\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_0\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer2 = setInterval(\"cligno_1()\", 600);
\t\t
\t\tfunction cligno_2() {
\t\t\tif(document.getElementById(\"connecte_1\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_1\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_1\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_1\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_1\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_1\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer3 = setInterval(\"cligno_2()\", 600);
\t\t
\t\tfunction cligno_3() {
\t\t\tif(document.getElementById(\"connecte_2\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_2\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_2\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_2\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_2\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_2\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer4 = setInterval(\"cligno_3()\", 600);
\t\t
\t\tfunction cligno_4() {
\t\t\tif(document.getElementById(\"connecte_3\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_3\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_3\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_3\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_3\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_3\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer5 = setInterval(\"cligno_4()\", 600);
\t\t
\t\tfunction cligno_5() {
\t\t\tif(document.getElementById(\"connecte_4\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_4\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_4\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_4\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_4\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_4\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer6 = setInterval(\"cligno_5()\", 600);
\t\t
\t\tfunction cligno_6() {
\t\t\tif(document.getElementById(\"connecte_5\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_5\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_5\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_5\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_5\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_5\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer7 = setInterval(\"cligno_6()\", 600);
\t\t
\t\tfunction cligno_7() {
\t\t\tif(document.getElementById(\"connecte_6\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_6\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_6\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_6\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_6\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_6\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer8 = setInterval(\"cligno_7()\", 600);
\t\t
\t\tfunction cligno_8() {
\t\t\tif(document.getElementById(\"connecte_7\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_7\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_7\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_7\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_7\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_7\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer9 = setInterval(\"cligno_8()\", 600);
\t\t
\t\tfunction cligno_9() {
\t\t\tif(document.getElementById(\"connecte_8\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_8\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_8\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_8\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_8\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_8\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer10 = setInterval(\"cligno_9()\", 600);
\t\t
\t\tfunction cligno_10() {
\t\t\tif(document.getElementById(\"connecte_9\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_9\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_9\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_9\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_9\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_9\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer11 = setInterval(\"cligno_10()\", 600);
\t\t
\t\tfunction cligno_11() {
\t\t\tif(document.getElementById(\"connecte_10\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_10\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_10\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_10\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_10\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_10\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer12 = setInterval(\"cligno_11()\", 600);
\t\t
\t\tfunction cligno_12() {
\t\t\tif(document.getElementById(\"connecte_11\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_11\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_11\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_11\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_11\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_11\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer13 = setInterval(\"cligno_12()\", 600);
\t\t
\t\tfunction cligno_13() {
\t\t\tif(document.getElementById(\"connecte_12\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_12\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_12\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_12\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_12\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_12\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer14 = setInterval(\"cligno_13()\", 600);
\t\t
\t\tfunction cligno_14() {
\t\t\tif(document.getElementById(\"connecte_13\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_13\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_13\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_13\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_13\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_13\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer15 = setInterval(\"cligno_14()\", 600);
\t\t
\t\tfunction cligno_15() {
\t\t\tif(document.getElementById(\"connecte_14\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_14\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_14\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_14\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_14\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_14\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer16 = setInterval(\"cligno_15()\", 600);
\t\t
\t\tfunction cligno_16() {
\t\t\tif(document.getElementById(\"connecte_15\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_15\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_15\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_15\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_15\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_15\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer17 = setInterval(\"cligno_16()\", 600);
\t\t
\t\tfunction cligno_17() {
\t\t\tif(document.getElementById(\"connecte_16\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_16\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_16\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_16\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_16\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_16\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer18 = setInterval(\"cligno_17()\", 600);
\t\t
\t\tfunction cligno_18() {
\t\t\tif(document.getElementById(\"connecte_17\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_17\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_17\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_17\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_17\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_17\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer19 = setInterval(\"cligno_18()\", 600);
\t\t
\t\tfunction cligno_19() {
\t\t\tif(document.getElementById(\"connecte_18\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_18\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_18\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_18\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_18\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_18\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer20 = setInterval(\"cligno_19()\", 600);
\t\t
\t\tfunction cligno_20() {
\t\t\tif(document.getElementById(\"connecte_19\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_19\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_19\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_19\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_19\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_19\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer21 = setInterval(\"cligno_20()\", 600);
\t\t
\t\tfunction cligno_21() {
\t\t\tif(document.getElementById(\"connecte_20\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_20\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_20\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_20\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_20\").style.color='darkgreen';
\t\t\t\tdocument.getElementById(\"connecte_20\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer22 = setInterval(\"cligno_21()\", 600);
\t\t
\t\tfunction cligno_22() {
\t\t\tif(document.getElementById(\"connecte_21\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_21\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_21\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_21\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_21\").style.color='orange';
\t\t\t\tdocument.getElementById(\"connecte_21\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer23 = setInterval(\"cligno_22()\", 600);
\t\t
\t\tfunction cligno_23() {
\t\t\tif(document.getElementById(\"connecte_22\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_22\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_22\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_22\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_22\").style.color='orange';
\t\t\t\tdocument.getElementById(\"connecte_22\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer24 = setInterval(\"cligno_23()\", 600);
\t\t
\t\tfunction cligno_24() {
\t\t\tif(document.getElementById(\"connecte_23\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_23\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_23\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_23\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_23\").style.color='orange';
\t\t\t\tdocument.getElementById(\"connecte_23\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer25 = setInterval(\"cligno_24()\", 600);
\t\t
\t\tfunction cligno_25() {
\t\t\tif(document.getElementById(\"connecte_24\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_24\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_24\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_24\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_24\").style.color='orange';
\t\t\t\tdocument.getElementById(\"connecte_24\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer26 = setInterval(\"cligno_25()\", 600);
\t\t
\t\tfunction cligno_26() {
\t\t\tif(document.getElementById(\"connecte_25\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_25\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_25\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_25\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_25\").style.color='orange';
\t\t\t\tdocument.getElementById(\"connecte_25\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer27 = setInterval(\"cligno_26()\", 600);
\t\t
\t\tfunction cligno_27() {
\t\t\tif(document.getElementById(\"connecte_26\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_26\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_26\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_26\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_26\").style.color='purple';
\t\t\t\tdocument.getElementById(\"connecte_26\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer28 = setInterval(\"cligno_27()\", 600);
\t\t
\t\tfunction cligno_28() {
\t\t\tif(document.getElementById(\"connecte_27\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_27\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_27\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_27\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_27\").style.color='purple';
\t\t\t\tdocument.getElementById(\"connecte_27\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer29 = setInterval(\"cligno_28()\", 600);
\t\t
\t\tfunction cligno_29() {
\t\t\tif(document.getElementById(\"connecte_28\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_28\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_28\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_28\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_28\").style.color='purple';
\t\t\t\tdocument.getElementById(\"connecte_28\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer30 = setInterval(\"cligno_29()\", 600);
\t\t
\t\tfunction cligno_30() {
\t\t\tif(document.getElementById(\"connecte_29\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_29\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_29\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_29\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_29\").style.color='purple';
\t\t\t\tdocument.getElementById(\"connecte_29\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer31 = setInterval(\"cligno_30()\", 600);
\t\t
\t\tfunction cligno_31() {
\t\t\tif(document.getElementById(\"connecte_30\").style.visibility!='hidden') {
\t\t\t\tdocument.getElementById(\"connecte_30\").style.visibility='hidden';
\t\t\t\tdocument.getElementById(\"connecte_30\").style.cursor='pointer';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById(\"connecte_30\").style.visibility='visible'; 
\t\t\t\tdocument.getElementById(\"connecte_30\").style.color='purple';
\t\t\t\tdocument.getElementById(\"connecte_30\").style.cursor='pointer';
\t\t\t}
\t\t}
\t\tvar timer32 = setInterval(\"cligno_31()\", 600);
\t\t
\t\tvar redirect = 'window.location.replace(\"\");'; 
\t\tsetTimeout(redirect,600000); 
\t</script>
\t<script src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(function() {
\t\t\t\$( \"#tabs\" ).tabs();
\t\t});
\t</script>
\t<script>
\t\t\$(function() {
\t\t\t\$( \"#tabs2\" ).tabs();
\t\t});
\t</script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout_meet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1010 => 588,  1006 => 587,  1002 => 586,  579 => 167,  575 => 126,  572 => 125,  566 => 13,  562 => 12,  557 => 11,  554 => 10,  548 => 8,  538 => 675,  534 => 674,  530 => 673,  504 => 650,  486 => 635,  464 => 616,  461 => 615,  455 => 613,  453 => 612,  446 => 608,  442 => 607,  438 => 606,  432 => 602,  428 => 600,  426 => 167,  416 => 160,  411 => 158,  403 => 152,  400 => 151,  394 => 150,  391 => 149,  388 => 148,  376 => 146,  364 => 144,  361 => 143,  349 => 141,  346 => 140,  340 => 138,  337 => 137,  334 => 136,  329 => 135,  326 => 134,  324 => 133,  316 => 127,  314 => 125,  308 => 121,  305 => 120,  299 => 119,  296 => 118,  293 => 117,  283 => 115,  273 => 113,  270 => 112,  260 => 110,  257 => 109,  251 => 107,  248 => 106,  245 => 105,  237 => 103,  235 => 102,  224 => 93,  221 => 92,  215 => 91,  212 => 90,  209 => 89,  189 => 85,  186 => 84,  176 => 82,  167 => 79,  164 => 78,  161 => 77,  156 => 76,  130 => 58,  120 => 56,  110 => 54,  108 => 53,  93 => 45,  88 => 42,  78 => 36,  73 => 33,  53 => 23,  43 => 15,  41 => 10,  36 => 8,  31 => 6,  25 => 2,  23 => 1,  240 => 104,  230 => 85,  226 => 83,  223 => 82,  220 => 81,  218 => 80,  211 => 76,  207 => 75,  203 => 74,  199 => 87,  195 => 72,  191 => 71,  187 => 70,  183 => 69,  179 => 68,  173 => 81,  163 => 63,  153 => 75,  151 => 74,  144 => 58,  135 => 61,  132 => 50,  126 => 47,  123 => 46,  117 => 43,  114 => 42,  111 => 41,  105 => 38,  102 => 37,  100 => 50,  92 => 30,  89 => 29,  83 => 39,  80 => 25,  74 => 22,  71 => 21,  68 => 30,  62 => 17,  59 => 24,  56 => 15,  52 => 13,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
