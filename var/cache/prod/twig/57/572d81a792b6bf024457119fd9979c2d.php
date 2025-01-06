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

/* @Autocomplete/autocomplete_form_theme.html.twig */
class __TwigTemplate_9abdac0a2107248bbe7788bf9acc39f3 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'ux_entity_autocomplete_widget' => [$this, 'block_ux_entity_autocomplete_widget'],
            'ux_entity_autocomplete_label' => [$this, 'block_ux_entity_autocomplete_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield from $this->unwrap()->yieldBlock('ux_entity_autocomplete_widget', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('ux_entity_autocomplete_label', $context, $blocks);
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ux_entity_autocomplete_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", true, true, false, 3)) {
            // line 4
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 4), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "attr", [], "any", false, false, false, 4), ["required" => ($context["required"] ?? null)])]);
            yield "
    ";
        } else {
            // line 6
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
    ";
        }
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ux_entity_autocomplete_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", true, true, false, 11)) {
            // line 12
            yield "        ";
            $context["id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12);
            // line 13
            yield "    ";
        }
        // line 14
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Autocomplete/autocomplete_form_theme.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  95 => 14,  92 => 13,  89 => 12,  86 => 11,  79 => 10,  70 => 6,  64 => 4,  61 => 3,  54 => 2,  49 => 10,  46 => 9,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Autocomplete/autocomplete_form_theme.html.twig", "C:\\Users\\maxdo\\CodeLocal\\Symphony\\skeleton_symfony\\vendor\\symfony\\ux-autocomplete\\templates\\autocomplete_form_theme.html.twig");
    }
}
