<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partenaire/index.html.twig */
class __TwigTemplate_811ab3b2647f0520eec631f0815e44dd4209d596924baa3142b6c309d6b48c41 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partenaire/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PartenaireController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    ";
        // line 13
        echo "
    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/diene/Musique/ProjetApi/ApiSymfony/src/Controller/PartenaireController.php", 0), "html", null, true);
        echo "\">src/Controller/PartenaireController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/diene/Musique/ProjetApi/ApiSymfony/templates/partenaire/index.html.twig", 0), "html", null, true);
        echo "\">templates/partenaire/index.html.twig</a></code></li>
    </ul>
</div>

<h1>Entre les soussignés :</h1>
<p>La société Wari , dont le siège social est à Dakar (Sénégal),
représentée par Mr: Kabirou Mbodje. Désigne si aprés le
\"prestataire\" d'une part et La société _________________, Société au capital de _________________ FCFA, 
dont le siège social est ________________ ____, 
enregistrée au Registre du Commerce  sous le numéro ____________ , représentée par Mr: _________________ [nom],
_________________ [prenom]. 

Il a été convenu ce qui suit :
</p>

<h2>Article premier - Objet</h2> 

<p>Le présent contrat est un contrat de prestation de service ayant pour objet la mission définie <br>
 au cahier des charges qui est d'obtenir un compte Wari au présent contrat et en faisant partie intégrante.
<br>
En contrepartie de la réalisation des prestations définies à l'Article premier ci-dessus, <br>
le prestataire versera au caissier de la somme forfaitaire de plus de <strong>75000 FCFA</strong>,
pour qu'il puisse commencer à faire ses opérations de services.
ventilée de la manière suivante:</p>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  101 => 16,  96 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PartenaireController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    {# <h1>Hello {{ controller_name }}! ✅</h1> #}

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/home/diene/Musique/ProjetApi/ApiSymfony/src/Controller/PartenaireController.php'|file_link(0) }}\">src/Controller/PartenaireController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/diene/Musique/ProjetApi/ApiSymfony/templates/partenaire/index.html.twig'|file_link(0) }}\">templates/partenaire/index.html.twig</a></code></li>
    </ul>
</div>

<h1>Entre les soussignés :</h1>
<p>La société Wari , dont le siège social est à Dakar (Sénégal),
représentée par Mr: Kabirou Mbodje. Désigne si aprés le
\"prestataire\" d'une part et La société _________________, Société au capital de _________________ FCFA, 
dont le siège social est ________________ ____, 
enregistrée au Registre du Commerce  sous le numéro ____________ , représentée par Mr: _________________ [nom],
_________________ [prenom]. 

Il a été convenu ce qui suit :
</p>

<h2>Article premier - Objet</h2> 

<p>Le présent contrat est un contrat de prestation de service ayant pour objet la mission définie <br>
 au cahier des charges qui est d'obtenir un compte Wari au présent contrat et en faisant partie intégrante.
<br>
En contrepartie de la réalisation des prestations définies à l'Article premier ci-dessus, <br>
le prestataire versera au caissier de la somme forfaitaire de plus de <strong>75000 FCFA</strong>,
pour qu'il puisse commencer à faire ses opérations de services.
ventilée de la manière suivante:</p>


{% endblock %}
", "partenaire/index.html.twig", "/home/diene/Téléchargements/Telegram Desktop/ApiSymfony/templates/partenaire/index.html.twig");
    }
}
