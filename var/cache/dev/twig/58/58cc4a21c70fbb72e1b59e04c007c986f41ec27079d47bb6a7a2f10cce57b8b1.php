<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f97058e196e8aaef437ff841392bfe41a0281d7941313ad5167d6058a0af0327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_676f291ddb001746c6b3176d120803746126218a175b3ae0279432ec74f5b111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676f291ddb001746c6b3176d120803746126218a175b3ae0279432ec74f5b111->enter($__internal_676f291ddb001746c6b3176d120803746126218a175b3ae0279432ec74f5b111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('form_label', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('choice_label', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('radio_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 182
        echo "
";
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('form_row', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('button_row', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('choice_row', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('date_row', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('time_row', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('radio_row', $context, $blocks);
        // line 232
        echo "
";
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_676f291ddb001746c6b3176d120803746126218a175b3ae0279432ec74f5b111->leave($__internal_676f291ddb001746c6b3176d120803746126218a175b3ae0279432ec74f5b111_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_86e0c073f4b06d0a753328dac9a9524c81aa7a3ec99d3f0c35d0223a170e0a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e0c073f4b06d0a753328dac9a9524c81aa7a3ec99d3f0c35d0223a170e0a9f->enter($__internal_86e0c073f4b06d0a753328dac9a9524c81aa7a3ec99d3f0c35d0223a170e0a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_86e0c073f4b06d0a753328dac9a9524c81aa7a3ec99d3f0c35d0223a170e0a9f->leave($__internal_86e0c073f4b06d0a753328dac9a9524c81aa7a3ec99d3f0c35d0223a170e0a9f_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7189e02e296b00caf41f9a832df02c0455103b1c40819a180ede708e7e39c06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7189e02e296b00caf41f9a832df02c0455103b1c40819a180ede708e7e39c06c->enter($__internal_7189e02e296b00caf41f9a832df02c0455103b1c40819a180ede708e7e39c06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7189e02e296b00caf41f9a832df02c0455103b1c40819a180ede708e7e39c06c->leave($__internal_7189e02e296b00caf41f9a832df02c0455103b1c40819a180ede708e7e39c06c_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1a3d35d3f54d20fce9d1b2c5e6fd6c56857df71d10cbf7e896c7c82b16408336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3d35d3f54d20fce9d1b2c5e6fd6c56857df71d10cbf7e896c7c82b16408336->enter($__internal_1a3d35d3f54d20fce9d1b2c5e6fd6c56857df71d10cbf7e896c7c82b16408336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1a3d35d3f54d20fce9d1b2c5e6fd6c56857df71d10cbf7e896c7c82b16408336->leave($__internal_1a3d35d3f54d20fce9d1b2c5e6fd6c56857df71d10cbf7e896c7c82b16408336_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f7542f4b58f8a2358798c67bdd5c0ccd72aabb3a13b2bcef5567dc0734cc37ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7542f4b58f8a2358798c67bdd5c0ccd72aabb3a13b2bcef5567dc0734cc37ea->enter($__internal_f7542f4b58f8a2358798c67bdd5c0ccd72aabb3a13b2bcef5567dc0734cc37ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_6f57c2056b7b92f413a32f59b33b5d22d3051b0749eaa76ea1d7b7d219c2d53e = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_fddafcac46ed33678eab98a9b5e67b6fde3f81dc01a65a14b4c6f1dd5b98e9f9 = "{{") && ('' === $__internal_fddafcac46ed33678eab98a9b5e67b6fde3f81dc01a65a14b4c6f1dd5b98e9f9 || 0 === strpos($__internal_6f57c2056b7b92f413a32f59b33b5d22d3051b0749eaa76ea1d7b7d219c2d53e, $__internal_fddafcac46ed33678eab98a9b5e67b6fde3f81dc01a65a14b4c6f1dd5b98e9f9)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_f7542f4b58f8a2358798c67bdd5c0ccd72aabb3a13b2bcef5567dc0734cc37ea->leave($__internal_f7542f4b58f8a2358798c67bdd5c0ccd72aabb3a13b2bcef5567dc0734cc37ea_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_73561b057ddea997eea23bdcb6da08d50a2b426ccefa594e2a50f08e404d87dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73561b057ddea997eea23bdcb6da08d50a2b426ccefa594e2a50f08e404d87dc->enter($__internal_73561b057ddea997eea23bdcb6da08d50a2b426ccefa594e2a50f08e404d87dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_73561b057ddea997eea23bdcb6da08d50a2b426ccefa594e2a50f08e404d87dc->leave($__internal_73561b057ddea997eea23bdcb6da08d50a2b426ccefa594e2a50f08e404d87dc_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_934bbcca64e70b7aa22c82cffa59ee172165ed3f1a915a6d2e9dd8274564ea66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934bbcca64e70b7aa22c82cffa59ee172165ed3f1a915a6d2e9dd8274564ea66->enter($__internal_934bbcca64e70b7aa22c82cffa59ee172165ed3f1a915a6d2e9dd8274564ea66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_934bbcca64e70b7aa22c82cffa59ee172165ed3f1a915a6d2e9dd8274564ea66->leave($__internal_934bbcca64e70b7aa22c82cffa59ee172165ed3f1a915a6d2e9dd8274564ea66_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0414d9466f521caf53447fde1301b8b0c2e3c7cef42b53175c04a268060b45ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0414d9466f521caf53447fde1301b8b0c2e3c7cef42b53175c04a268060b45ae->enter($__internal_0414d9466f521caf53447fde1301b8b0c2e3c7cef42b53175c04a268060b45ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_0414d9466f521caf53447fde1301b8b0c2e3c7cef42b53175c04a268060b45ae->leave($__internal_0414d9466f521caf53447fde1301b8b0c2e3c7cef42b53175c04a268060b45ae_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9f7652fac57b7f3affc0394799dfb9b885485e5269e3055f1c74df3344bfa6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7652fac57b7f3affc0394799dfb9b885485e5269e3055f1c74df3344bfa6d3->enter($__internal_9f7652fac57b7f3affc0394799dfb9b885485e5269e3055f1c74df3344bfa6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_9f7652fac57b7f3affc0394799dfb9b885485e5269e3055f1c74df3344bfa6d3->leave($__internal_9f7652fac57b7f3affc0394799dfb9b885485e5269e3055f1c74df3344bfa6d3_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4f27bf0f887dfb672a942577011b4bc0db778fbf0291eaebbd1519fabb393d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f27bf0f887dfb672a942577011b4bc0db778fbf0291eaebbd1519fabb393d87->enter($__internal_4f27bf0f887dfb672a942577011b4bc0db778fbf0291eaebbd1519fabb393d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_4f27bf0f887dfb672a942577011b4bc0db778fbf0291eaebbd1519fabb393d87->leave($__internal_4f27bf0f887dfb672a942577011b4bc0db778fbf0291eaebbd1519fabb393d87_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e7bde077e7736dde0b0d65f8f40b8e6c8aab611f6ec1d02b8dca9fec8079e587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bde077e7736dde0b0d65f8f40b8e6c8aab611f6ec1d02b8dca9fec8079e587->enter($__internal_e7bde077e7736dde0b0d65f8f40b8e6c8aab611f6ec1d02b8dca9fec8079e587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 98
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 99
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 100
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 104
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 106
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 107
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 108
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>";
        }
        
        $__internal_e7bde077e7736dde0b0d65f8f40b8e6c8aab611f6ec1d02b8dca9fec8079e587->leave($__internal_e7bde077e7736dde0b0d65f8f40b8e6c8aab611f6ec1d02b8dca9fec8079e587_prof);

    }

    // line 115
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5134a3909fbaefd7176099efcb811a8a4a6e26946a78750b54373464ae00e111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5134a3909fbaefd7176099efcb811a8a4a6e26946a78750b54373464ae00e111->enter($__internal_5134a3909fbaefd7176099efcb811a8a4a6e26946a78750b54373464ae00e111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 116
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 117
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 120
            echo "<div class=\"checkbox\">";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 122
            echo "</div>";
        }
        
        $__internal_5134a3909fbaefd7176099efcb811a8a4a6e26946a78750b54373464ae00e111->leave($__internal_5134a3909fbaefd7176099efcb811a8a4a6e26946a78750b54373464ae00e111_prof);

    }

    // line 126
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_bfba9574686b64010bd85e7d63c84fca224ddb5f04e0b46a13fed83a5899794f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfba9574686b64010bd85e7d63c84fca224ddb5f04e0b46a13fed83a5899794f->enter($__internal_bfba9574686b64010bd85e7d63c84fca224ddb5f04e0b46a13fed83a5899794f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 127
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 128
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 131
            echo "<div class=\"radio\">";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 133
            echo "</div>";
        }
        
        $__internal_bfba9574686b64010bd85e7d63c84fca224ddb5f04e0b46a13fed83a5899794f->leave($__internal_bfba9574686b64010bd85e7d63c84fca224ddb5f04e0b46a13fed83a5899794f_prof);

    }

    // line 139
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5a5f693c0f29c651d5bd8832b7e56a5e2b6c122b2eee76e5024e8493edd7e433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5f693c0f29c651d5bd8832b7e56a5e2b6c122b2eee76e5024e8493edd7e433->enter($__internal_5a5f693c0f29c651d5bd8832b7e56a5e2b6c122b2eee76e5024e8493edd7e433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 140
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 141
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5a5f693c0f29c651d5bd8832b7e56a5e2b6c122b2eee76e5024e8493edd7e433->leave($__internal_5a5f693c0f29c651d5bd8832b7e56a5e2b6c122b2eee76e5024e8493edd7e433_prof);

    }

    // line 144
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_81608cd472a99b01daff1dfac8c10f06c2778c443b0dd5e1e1b55d575b3b02ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81608cd472a99b01daff1dfac8c10f06c2778c443b0dd5e1e1b55d575b3b02ec->enter($__internal_81608cd472a99b01daff1dfac8c10f06c2778c443b0dd5e1e1b55d575b3b02ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 146
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 147
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_81608cd472a99b01daff1dfac8c10f06c2778c443b0dd5e1e1b55d575b3b02ec->leave($__internal_81608cd472a99b01daff1dfac8c10f06c2778c443b0dd5e1e1b55d575b3b02ec_prof);

    }

    // line 150
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_56ddd65081fd32d260601a165567161c3f70dbda179f4067c0073c3e0d4c0523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ddd65081fd32d260601a165567161c3f70dbda179f4067c0073c3e0d4c0523->enter($__internal_56ddd65081fd32d260601a165567161c3f70dbda179f4067c0073c3e0d4c0523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_56ddd65081fd32d260601a165567161c3f70dbda179f4067c0073c3e0d4c0523->leave($__internal_56ddd65081fd32d260601a165567161c3f70dbda179f4067c0073c3e0d4c0523_prof);

    }

    // line 154
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ffc50b68416e16d39b5d1591e2ade071b58ee0e93667e5331dee5762d2fe5141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc50b68416e16d39b5d1591e2ade071b58ee0e93667e5331dee5762d2fe5141->enter($__internal_ffc50b68416e16d39b5d1591e2ade071b58ee0e93667e5331dee5762d2fe5141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ffc50b68416e16d39b5d1591e2ade071b58ee0e93667e5331dee5762d2fe5141->leave($__internal_ffc50b68416e16d39b5d1591e2ade071b58ee0e93667e5331dee5762d2fe5141_prof);

    }

    // line 158
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_28c161adab06229962ebb8c314759ac6dbfe906c12c4382e9189fe3d2d2cb322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c161adab06229962ebb8c314759ac6dbfe906c12c4382e9189fe3d2d2cb322->enter($__internal_28c161adab06229962ebb8c314759ac6dbfe906c12c4382e9189fe3d2d2cb322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 159
        echo "    ";
        // line 160
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 161
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 162
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 165
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 168
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 169
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 170
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 171
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 174
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 177
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 178
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 179
            echo "</label>
    ";
        }
        
        $__internal_28c161adab06229962ebb8c314759ac6dbfe906c12c4382e9189fe3d2d2cb322->leave($__internal_28c161adab06229962ebb8c314759ac6dbfe906c12c4382e9189fe3d2d2cb322_prof);

    }

    // line 185
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a35ae04052e27775c2621ae2ea16ec652a844aa691448aee0d01a2e1af9699f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35ae04052e27775c2621ae2ea16ec652a844aa691448aee0d01a2e1af9699f6->enter($__internal_a35ae04052e27775c2621ae2ea16ec652a844aa691448aee0d01a2e1af9699f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 186
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 190
        echo "</div>";
        
        $__internal_a35ae04052e27775c2621ae2ea16ec652a844aa691448aee0d01a2e1af9699f6->leave($__internal_a35ae04052e27775c2621ae2ea16ec652a844aa691448aee0d01a2e1af9699f6_prof);

    }

    // line 193
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_04967b88186223e6b235c85f3f27e3150f3e9390afd64a6dde483690ed47464d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04967b88186223e6b235c85f3f27e3150f3e9390afd64a6dde483690ed47464d->enter($__internal_04967b88186223e6b235c85f3f27e3150f3e9390afd64a6dde483690ed47464d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 194
        echo "<div class=\"form-group\">";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 196
        echo "</div>";
        
        $__internal_04967b88186223e6b235c85f3f27e3150f3e9390afd64a6dde483690ed47464d->leave($__internal_04967b88186223e6b235c85f3f27e3150f3e9390afd64a6dde483690ed47464d_prof);

    }

    // line 199
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_238cfef73afd22517e0598ba34ba64afd7cc9f7c2ec124de6c5edb5a7726bf64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238cfef73afd22517e0598ba34ba64afd7cc9f7c2ec124de6c5edb5a7726bf64->enter($__internal_238cfef73afd22517e0598ba34ba64afd7cc9f7c2ec124de6c5edb5a7726bf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_238cfef73afd22517e0598ba34ba64afd7cc9f7c2ec124de6c5edb5a7726bf64->leave($__internal_238cfef73afd22517e0598ba34ba64afd7cc9f7c2ec124de6c5edb5a7726bf64_prof);

    }

    // line 204
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_09af9ddb09fd600c6ef9364e81cc703ffb07a6d6e8df96f7efa5bdb7bc67814b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09af9ddb09fd600c6ef9364e81cc703ffb07a6d6e8df96f7efa5bdb7bc67814b->enter($__internal_09af9ddb09fd600c6ef9364e81cc703ffb07a6d6e8df96f7efa5bdb7bc67814b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_09af9ddb09fd600c6ef9364e81cc703ffb07a6d6e8df96f7efa5bdb7bc67814b->leave($__internal_09af9ddb09fd600c6ef9364e81cc703ffb07a6d6e8df96f7efa5bdb7bc67814b_prof);

    }

    // line 209
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a863f1045cb9bac3a06d929627d49e63ec39015de840614117f5d817f60c185d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a863f1045cb9bac3a06d929627d49e63ec39015de840614117f5d817f60c185d->enter($__internal_a863f1045cb9bac3a06d929627d49e63ec39015de840614117f5d817f60c185d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 210
        $context["force_error"] = true;
        // line 211
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a863f1045cb9bac3a06d929627d49e63ec39015de840614117f5d817f60c185d->leave($__internal_a863f1045cb9bac3a06d929627d49e63ec39015de840614117f5d817f60c185d_prof);

    }

    // line 214
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_93e6627d7fd91811e3a7d2b2968a22a30d62dfda69a4caa758524e84118e686d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e6627d7fd91811e3a7d2b2968a22a30d62dfda69a4caa758524e84118e686d->enter($__internal_93e6627d7fd91811e3a7d2b2968a22a30d62dfda69a4caa758524e84118e686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 215
        $context["force_error"] = true;
        // line 216
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_93e6627d7fd91811e3a7d2b2968a22a30d62dfda69a4caa758524e84118e686d->leave($__internal_93e6627d7fd91811e3a7d2b2968a22a30d62dfda69a4caa758524e84118e686d_prof);

    }

    // line 219
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cc3f2ed2fcbf5968a098655736494fccc11bd756c3761c5ac800126a1845aa12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3f2ed2fcbf5968a098655736494fccc11bd756c3761c5ac800126a1845aa12->enter($__internal_cc3f2ed2fcbf5968a098655736494fccc11bd756c3761c5ac800126a1845aa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 220
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 223
        echo "</div>";
        
        $__internal_cc3f2ed2fcbf5968a098655736494fccc11bd756c3761c5ac800126a1845aa12->leave($__internal_cc3f2ed2fcbf5968a098655736494fccc11bd756c3761c5ac800126a1845aa12_prof);

    }

    // line 226
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_403003b15a6c7ab4296250bd85d5150abcecdabe33b566cec34d0b97d0451ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403003b15a6c7ab4296250bd85d5150abcecdabe33b566cec34d0b97d0451ee9->enter($__internal_403003b15a6c7ab4296250bd85d5150abcecdabe33b566cec34d0b97d0451ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 227
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 230
        echo "</div>";
        
        $__internal_403003b15a6c7ab4296250bd85d5150abcecdabe33b566cec34d0b97d0451ee9->leave($__internal_403003b15a6c7ab4296250bd85d5150abcecdabe33b566cec34d0b97d0451ee9_prof);

    }

    // line 235
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_003fb08727bbbccb00db6f91aa76ce26e52c322eb3726b2b3e83f92126a786d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003fb08727bbbccb00db6f91aa76ce26e52c322eb3726b2b3e83f92126a786d6->enter($__internal_003fb08727bbbccb00db6f91aa76ce26e52c322eb3726b2b3e83f92126a786d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_3_layout.html.twig"));

        // line 236
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 237
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 238
            echo "    <ul class=\"list-unstyled\">";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 240
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "</ul>
    ";
            // line 243
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_003fb08727bbbccb00db6f91aa76ce26e52c322eb3726b2b3e83f92126a786d6->leave($__internal_003fb08727bbbccb00db6f91aa76ce26e52c322eb3726b2b3e83f92126a786d6_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  837 => 243,  834 => 242,  826 => 240,  822 => 239,  820 => 238,  814 => 237,  812 => 236,  806 => 235,  799 => 230,  797 => 229,  795 => 228,  789 => 227,  783 => 226,  776 => 223,  774 => 222,  772 => 221,  766 => 220,  760 => 219,  753 => 216,  751 => 215,  745 => 214,  738 => 211,  736 => 210,  730 => 209,  723 => 206,  721 => 205,  715 => 204,  708 => 201,  706 => 200,  700 => 199,  693 => 196,  691 => 195,  689 => 194,  683 => 193,  676 => 190,  674 => 189,  672 => 188,  670 => 187,  664 => 186,  658 => 185,  649 => 179,  645 => 178,  630 => 177,  626 => 174,  623 => 171,  622 => 170,  621 => 169,  619 => 168,  616 => 167,  613 => 166,  610 => 165,  607 => 164,  604 => 163,  601 => 162,  598 => 161,  595 => 160,  593 => 159,  587 => 158,  580 => 155,  574 => 154,  567 => 151,  561 => 150,  554 => 147,  552 => 146,  546 => 144,  539 => 141,  537 => 140,  531 => 139,  523 => 133,  521 => 132,  519 => 131,  516 => 129,  514 => 128,  512 => 127,  506 => 126,  498 => 122,  496 => 121,  494 => 120,  491 => 118,  489 => 117,  487 => 116,  481 => 115,  473 => 111,  467 => 108,  466 => 107,  465 => 106,  461 => 105,  457 => 104,  450 => 100,  449 => 99,  448 => 98,  444 => 97,  442 => 96,  436 => 95,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 235,  197 => 234,  194 => 232,  192 => 226,  189 => 225,  187 => 219,  184 => 218,  182 => 214,  179 => 213,  177 => 209,  174 => 208,  172 => 204,  169 => 203,  167 => 199,  164 => 198,  162 => 193,  159 => 192,  157 => 185,  154 => 184,  151 => 182,  149 => 158,  146 => 157,  144 => 154,  141 => 153,  139 => 150,  136 => 149,  134 => 144,  131 => 143,  129 => 139,  126 => 138,  123 => 136,  121 => 126,  118 => 125,  116 => 115,  113 => 114,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
