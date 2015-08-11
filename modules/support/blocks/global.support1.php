<?php
if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

if ( ! nv_function_exists( 'nv_global_support' ) )
{

    function nv_global_support ( )
    {
        global $global_config, $module_data;
		
        if ( file_exists( NV_ROOTDIR . "/themes/" . $global_config['site_theme'] . "/modules/support/global_support.tpl" ) )
        {
            $block_theme = $global_config['site_theme'];
        }
        else
        {
            $block_theme = "default";
        }
		$sql = "SELECT * FROM ". 'NV_'
		
        $xtpl = new XTemplate( "global_support.tpl", NV_ROOTDIR . "/themes/" . $block_theme . "/modules/support" );
		
        $xtpl->assign( 'TEMPLATE', $block_theme );
        
        
        $xtpl->parse( 'main' );
        return $xtpl->text( 'main' );
    }

}

if ( defined( 'NV_SYSTEM' ) )
{
    $content = nv_global_support();
}
?>
 
