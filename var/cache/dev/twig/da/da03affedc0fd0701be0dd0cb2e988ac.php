<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* index/index.html.twig */
class __TwigTemplate_d5795d7db977eb4dbfdc298d0f4bb9ea extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello IndexController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8\">
        <div class=\"max-w-7xl w-full space-y-8 bg-white rounded-lg shadow-lg p-6 md:p-8 lg:p-12\"> ";
        // line 8
        yield "            <div>
                <img class=\"mx-auto h-12 w-auto\" src=\"https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600\" alt=\"Workflow\">
                <h2 class=\"mt-6 text-center text-2xl md:text-3xl font-extrabold text-gray-900\"> ";
        // line 11
        yield "                    Bienvenue sur le PDF Génial
                </h2>
                <p class=\"mt-2 text-center text-sm md:text-base text-gray-600\"> ";
        // line 14
        yield "                    Généré avec Symfony & Tailwind CSS
                </p>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\"> ";
        // line 19
        yield "                <div class=\"bg-gray-100 rounded-lg p-4 md:p-6 shadow-inner\"> ";
        // line 20
        yield "                    <h3 class=\"text-lg font-medium text-gray-900\">Section 1</h3>
                    <p class=\"mt-2 text-sm text-gray-600\">
                        Ceci est la première section de votre PDF incroyable. Vous pouvez ajouter n'importe quel contenu ici.
                    </p>
                    <ul class=\"list-disc pl-6 mt-2 text-sm text-gray-600\">
                        <li>Élément 1</li>
                        <li>Élément 2</li>
                        <li>Élément 3</li>
                    </ul>
                </div>

                <div class=\"bg-gray-100 rounded-lg p-4 md:p-6 shadow-inner\"> ";
        // line 32
        yield "                    <h3 class=\"text-lg font-medium text-gray-900\">Section 2</h3>
                    <p class=\"mt-2 text-sm text-gray-600\">
                        Voici une autre section avec plus de contenu. N'hésitez pas à la personnaliser.
                    </p>
                    <img src=\"https://via.placeholder.com/150\" alt=\"Image de remplacement\" class=\"mt-4 mx-auto rounded max-w-full\"> ";
        // line 37
        yield "                </div>

                <div class=\"bg-gray-100 rounded-lg p-4 md:p-6 shadow-inner\"> ";
        // line 40
        yield "                    <h3 class=\"text-lg font-medium text-gray-900\">Section 3 (Ajoutée pour l'exemple responsive)</h3>
                    <p class=\"mt-2 text-sm text-gray-600\">
                        Une troisième section pour démontrer la disposition sur les grands écrans.
                    </p>
                </div>
            </div>

            <div class=\"bg-gray-100 rounded-lg p-4 md:p-6 shadow-inner overflow-x-auto\"> ";
        // line 48
        yield "                <h3 class=\"text-lg font-medium text-gray-900\">Exemple de Tableau</h3>
                <table class=\"min-w-full divide-y divide-gray-200 mt-4\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-3 py-2 md:px-6 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th> ";
        // line 53
        yield "                            <th scope=\"col\" class=\"px-3 py-2 md:px-6 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Titre</th> ";
        // line 54
        yield "                            <th scope=\"col\" class=\"px-3 py-2 md:px-6 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th> ";
        // line 55
        yield "                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        <tr>
                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">John Doe</td> ";
        // line 60
        yield "                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Ingénieur Logiciel</td> ";
        // line 61
        yield "                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Actif</td> ";
        // line 62
        yield "                        </tr>
                        <tr>
                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Jane Smith</td> ";
        // line 65
        yield "                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Responsable Marketing</td> ";
        // line 66
        yield "                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Inactif</td> ";
        // line 67
        yield "                        </tr>
                    </tbody>
                </table>
            </div>

            <div class=\"text-center text-gray-500 text-xs mt-8\">
                &copy; ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Votre Entreprise. Tous droits réservés.
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  187 => 73,  179 => 67,  177 => 66,  175 => 65,  171 => 62,  169 => 61,  167 => 60,  161 => 55,  159 => 54,  157 => 53,  151 => 48,  142 => 40,  138 => 37,  132 => 32,  119 => 20,  117 => 19,  111 => 14,  107 => 11,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello IndexController!{% endblock %}

{% block body %}
    <div class=\"bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8\">
        <div class=\"max-w-7xl w-full space-y-8 bg-white rounded-lg shadow-lg p-6 md:p-8 lg:p-12\"> {# max-w-7xl pour les très grands écrans #}
            <div>
                <img class=\"mx-auto h-12 w-auto\" src=\"https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600\" alt=\"Workflow\">
                <h2 class=\"mt-6 text-center text-2xl md:text-3xl font-extrabold text-gray-900\"> {# Taille de texte responsive #}
                    Bienvenue sur le PDF Génial
                </h2>
                <p class=\"mt-2 text-center text-sm md:text-base text-gray-600\"> {# Taille de texte responsive #}
                    Généré avec Symfony & Tailwind CSS
                </p>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\"> {# Grid responsive #}
                <div class=\"bg-gray-100 rounded-lg p-4 md:p-6 shadow-inner\"> {# Padding responsive #}
                    <h3 class=\"text-lg font-medium text-gray-900\">Section 1</h3>
                    <p class=\"mt-2 text-sm text-gray-600\">
                        Ceci est la première section de votre PDF incroyable. Vous pouvez ajouter n'importe quel contenu ici.
                    </p>
                    <ul class=\"list-disc pl-6 mt-2 text-sm text-gray-600\">
                        <li>Élément 1</li>
                        <li>Élément 2</li>
                        <li>Élément 3</li>
                    </ul>
                </div>

                <div class=\"bg-gray-100 rounded-lg p-4 md:p-6 shadow-inner\"> {# Padding responsive #}
                    <h3 class=\"text-lg font-medium text-gray-900\">Section 2</h3>
                    <p class=\"mt-2 text-sm text-gray-600\">
                        Voici une autre section avec plus de contenu. N'hésitez pas à la personnaliser.
                    </p>
                    <img src=\"https://via.placeholder.com/150\" alt=\"Image de remplacement\" class=\"mt-4 mx-auto rounded max-w-full\"> {# max-w-full pour les images responsive #}
                </div>

                <div class=\"bg-gray-100 rounded-lg p-4 md:p-6 shadow-inner\"> {# Padding responsive #}
                    <h3 class=\"text-lg font-medium text-gray-900\">Section 3 (Ajoutée pour l'exemple responsive)</h3>
                    <p class=\"mt-2 text-sm text-gray-600\">
                        Une troisième section pour démontrer la disposition sur les grands écrans.
                    </p>
                </div>
            </div>

            <div class=\"bg-gray-100 rounded-lg p-4 md:p-6 shadow-inner overflow-x-auto\"> {# Padding responsive et overflow pour les tableaux #}
                <h3 class=\"text-lg font-medium text-gray-900\">Exemple de Tableau</h3>
                <table class=\"min-w-full divide-y divide-gray-200 mt-4\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-3 py-2 md:px-6 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th> {# Padding responsive #}
                            <th scope=\"col\" class=\"px-3 py-2 md:px-6 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Titre</th> {# Padding responsive #}
                            <th scope=\"col\" class=\"px-3 py-2 md:px-6 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th> {# Padding responsive #}
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        <tr>
                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">John Doe</td> {# Padding responsive #}
                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Ingénieur Logiciel</td> {# Padding responsive #}
                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Actif</td> {# Padding responsive #}
                        </tr>
                        <tr>
                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Jane Smith</td> {# Padding responsive #}
                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Responsable Marketing</td> {# Padding responsive #}
                            <td class=\"px-3 py-2 md:px-6 md:py-4 whitespace-nowrap text-sm text-gray-500\">Inactif</td> {# Padding responsive #}
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class=\"text-center text-gray-500 text-xs mt-8\">
                &copy; {{ \"now\"|date(\"Y\") }} Votre Entreprise. Tous droits réservés.
            </div>
        </div>
    </div>
{% endblock %}", "index/index.html.twig", "C:\\Users\\maxdo\\CodeLocal\\Symphony\\skeleton_symfony\\templates\\index\\index.html.twig");
    }
}
