<?php
class Default_action_Review_Index_ed0efcd0ee8d674f158e67a56a780c61806fc000 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Module';
    }
    public function hasLayout() {
        return true;
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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageTitle'),
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

$output4 .= '<h1>';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageTitle')]);

$output4 .= '</h1>';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '

    <main data-workspace-switch-action="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('workspaceSwitched');
};

$arguments5 = [
'value' => NULL,
];

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showGrid'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'section' => NULL,
'partial' => 'WorkingTable',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
},
'__else' => function() use ($renderingContext) {
$output37 = '';

$output37 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:editorInLive',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments38 = [
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]),
'title' => NULL,
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure39 = ($arguments38['message'] !== null) ? function() use ($arguments38) { return $arguments38['message']; } : $renderChildrenClosure39;
$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
            ';
return $output37;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('isAdmin'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('customWorkspaceExists'),
'3' => ' != 1',
];

$expression14 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 1));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:admin.noWorkspaceSetup.message',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= '</p>
                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:admin.noWorkspaceSetup.buttonCreate',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '
                    ';
return $output27;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'route' => 'workspaces_admin',
'parameters' => [],
'referenceType' => 'absolute',
];

$arguments23 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-primary',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => NULL,
'pid' => 0,
'table' => 'sys_workspace',
'returnUrl' => TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext),
'defaultValues' => [],
];

$output20 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output20 .= '
                ';
return $output20;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:admin.noWorkspaceSetup.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments16 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext),
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure17 = ($arguments16['message'] !== null) ? function() use ($arguments16) { return $arguments16['message']; } : $renderChildrenClosure17;
$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
            ';
return $output15;
}
    ],
    1 => [
        'condition' => function() use ($renderingContext) {

$array30 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'1' => ' == 0',
];

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression31(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'key' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:moduleOnPageIdZero',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments33 = [
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]),
'title' => NULL,
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure34 = ($arguments33['message'] !== null) ? function() use ($arguments33) { return $arguments33['message']; } : $renderChildrenClosure34;
$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
            ';
return $output32;
}
    ],
],
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, static fn() => '', $renderingContext)
;

$output0 .= '
    </main>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array43 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showLegend'),
];

$expression44 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments42 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression44(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'section' => NULL,
'partial' => 'legend',
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output47 = '';

$output47 .= '

';

$output47 .= '';

$output47 .= '

';

$output47 .= '';

$output47 .= '


';

    return $output47;
}

}

#