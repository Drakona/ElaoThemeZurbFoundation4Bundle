<?php

/**
 * This file is part of the Elao Zurb Foundation 4 Theme Bundle.
 *
 * Copyright (C) 2013 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\Theme\ZurbFoundation4Bundle\Twig\Extension;

/**
 * Elao Theme Zurb Foundation 4 Twig Extension
 */
class ZurbFoundation4Extension extends \Twig_Extension
{
    /**
     * The Twig templating service
     *
     * @var Twig_Environment
     */
    private $templating;

    /**
     * Constructor
     *
     * @param Twig_Environment $templating
     */
    public function __construct(\Twig_Environment $templating)
    {
        $this->templating = $templating;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'elao_theme_zurb_foundation_4_extension';
    }
}
