<?php

/* meetchatandplayHomeHomeBundle:Home:index.html.twig */
class __TwigTemplate_14fd1faf45265b0c91033fb4579febf02814e8edebdd707349d946bbfd329861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fav.ico"), "html", null, true);
        echo "\" />
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
  <script>
  \$(function() {
    \$( \"#tabs\" ).tabs();
  });
  </script>
</head>
<body>
 
<div id=\"tabs\">
  <ul>
    <li><a href = \"#tabs-1\"><img src = \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart.png"), "html", null, true);
        echo "\" width = \"395px\" height = \"480px\" style = \"margin-right : 27px;\" title=\"Faîtes des rencontres inoubliables grâce à mon service de rencontre !\" /></a></li>
    <li><a href = \"#tabs-2\"><img src = \"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/chat.png"), "html", null, true);
        echo "\" width = \"395px\" height = \"480px\" style = \"margin-right : 27px;\" title=\"Discutez avec vos amis depuis mon réseau social !\" /></a></li>
    <li><a href = \"#tabs-3\"><img src = \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/play.png"), "html", null, true);
        echo "\" width = \"395px\" height = \"480px\" title  = \"Jouez à des jeux funs et divertissants créés par mes soins !\" /></a></li>
  </ul>
  <div id=\"tabs-1\">
    <center>
\t\t<p>
\t\t\t<a href = \"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("meetchatandplay_meet_homepage");
        echo "\"><img src = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/suivant.png"), "html", null, true);
        echo "\" title=\"Accéder à la partie 'Site de rencontre'\" style = \"margin-top: 50px;\" /></a><br>
\t\t\t<b style = \"margin-left: 12px;\">Continuer</b>
\t\t</p>
\t</center>
  </div>
  <div id=\"tabs-2\">
     <center>
\t\t<p>
\t\t\t<a href = \"chat.php\"><img src = \"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/suivant.png"), "html", null, true);
        echo "\" title=\"Accéder à la partie 'Réseau social'\" style = \"margin-top: 50px;\" /></a><br>
\t\t\t<b style = \"margin-left: 12px;\">Continuer</b>
\t\t</p>
\t</center>
  </div>
  <div id=\"tabs-3\">
     <center>
\t\t<p>
\t\t\t<a href = \"play.php\"><img src = \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/suivant.png"), "html", null, true);
        echo "\" title=\"Accéder à la partie 'Jeux'\" style = \"margin-top: 50px;\" /></a><br>
\t\t\t<b style = \"margin-left: 12px;\">Continuer</b>
\t\t</p>
\t</center>
  </div>
  <div style = \"margin-bottom: 56px;\">
  </div>
</div>



</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Meet, Chat & Play";
    }

    public function getTemplateName()
    {
        return "meetchatandplayHomeHomeBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 6,  100 => 44,  89 => 36,  76 => 28,  68 => 23,  64 => 22,  60 => 21,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  20 => 1,);
    }
}
