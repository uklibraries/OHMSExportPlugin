<?php
 
add_filter('define_action_contexts', 'ohms_xml_action_context');
 
function ohms_xml_action_context($context, $controller)
{
    if ($controller instanceof ItemsController) {
        $context['browse'][] = 'ohms-xml';
    }
 
    return $context;
}

add_filter('define_response_contexts', 'ohms_xml_response_context');
 
function ohms_xml_response_context($context)
{
    $context['ohms-xml'] = array('suffix'  => 'ohms-xml', 
                            'headers' => array('Content-Type' => 'text/xml'));
 
    return $context;
}
