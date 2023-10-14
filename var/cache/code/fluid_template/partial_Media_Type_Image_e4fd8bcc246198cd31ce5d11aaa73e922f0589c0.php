<?php
class partial_Media_Type_Image_e4fd8bcc246198cd31ce5d11aaa73e922f0589c0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'ce' => 
  array (
    0 => 'TYPO3\\CMS\\FluidStyledContent\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
<figure class="image">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.link'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'dimensions' => $renderingContext->getVariableProvider()->getByPath('dimensions'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
];

$arguments8 = [
'section' => NULL,
'partial' => 'Media/Rendering/Image',
'delegate' => NULL,
'arguments' => $array10,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
            ';
return $output7;
};

$arguments5 = [
'parameter' => $renderingContext->getVariableProvider()->getByPath('file.link'),
'target' => '',
'class' => '',
'title' => $renderingContext->getVariableProvider()->getByPath('file.title'),
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        ';
return $output4;
},
'__else' => function() use ($renderingContext) {
$output11 = '';

$output11 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.image_zoom'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$array21 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'dimensions' => $renderingContext->getVariableProvider()->getByPath('dimensions'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
];

$arguments19 = [
'section' => NULL,
'partial' => 'Media/Rendering/Image',
'delegate' => NULL,
'arguments' => $array21,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
                    ';
return $output18;
};

$arguments16 = [
'image' => $renderingContext->getVariableProvider()->getByPath('file'),
'configuration' => $renderingContext->getVariableProvider()->getByPath('settings.media.popup'),
];

$output15 .= TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                ';
return $output15;
},
'__else' => function() use ($renderingContext) {
$output22 = '';

$output22 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$array25 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'dimensions' => $renderingContext->getVariableProvider()->getByPath('dimensions'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
];

$arguments23 = [
'section' => NULL,
'partial' => 'Media/Rendering/Image',
'delegate' => NULL,
'arguments' => $array25,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                ';
return $output22;
},
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;

$output11 .= '
        ';
return $output11;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array27 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.description'),
];

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments26 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression28(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output29 = '';

$output29 .= '
        <figcaption class="image-caption">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.description')]);
};

$arguments30 = [
'value' => NULL,
];
$renderChildrenClosure31 = ($arguments30['value'] !== null) ? function() use ($arguments30) { return $arguments30['value']; } : $renderChildrenClosure31;
$output29 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
        </figcaption>
    ';
return $output29;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, static fn() => '', $renderingContext)
;

$output0 .= '
</figure>

';

    return $output0;
}

}

#