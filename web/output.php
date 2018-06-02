<?php /**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    design
 * @package     base_default
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
?>
<?php $storeNames = '';
$base_store = Mage::app()->getStore()->getCode();
switch ($base_store) {
    case 'uy' :
        $storeNames = 'Uruguay';
        break;
    case 'ar' :
        $storeNames = 'Argentina';
        break;
    case 'mx' :
        $storeNames = 'Mexico';
        break;
    case 'br' :
        $storeNames = 'Brasil';
        break;
    case 'co' :
        $storeNames = 'Colombia';
        break;
    case 'pe' :
        $storeNames = 'Peru';
        break;
    case 'cl' :
        $storeNames = 'Chile';
        break;

}
$current_url = Mage::helper('core/url')->getCurrentUrl();
$identifier = Mage::getSingleton('cms/page')->getIdentifier();
if (strpos($current_url, 'checkout/onepage') == false) {
    ?>
    <?php if (strpos($current_url, 'customer/account') == false) {
        ?>
        <?php echo $this->__('Marcas más buscadas') ?>
        <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('slider-marcas-footer')->toHtml(); ?>
    <?php } ?>
    <?php if ($identifier == $base_store || $identifier == 'home-2016-' . $base_store) { ?>
        <?php echo $this->__('Testimonios de nuestros clientes') ?>
        <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('testimonios-footer')->toHtml(); ?>
        <?php if ($base_store == 'co' || $base_store == 'cl') {
            echo 'hidden';
        } ?>
        <?php echo $this->__('Síguenos en nuestras redes') ?>
        <?php switch ($base_store) {
            case 'ar':
                $widget_fb = 'https://www.facebook.com/TiendaMIAcomAR';
                $widget_ig = 'https://www.instagram.com/tiendamiacom/';
                $widget_tw = 'https://twitter.com/tiendamiacom?ref_src=twsrc%5Etfw';
                $widget_yt = 'https://www.youtube.com/channel/UCje2Ylf4fy2C18LKvuIK1WQ';
                break;
            case 'cl':
                $widget_fb = 'https://www.facebook.com/TiendaMIAcomCL';
                $widget_ig = 'https://www.instagram.com/tiendamiacom/';
                $widget_tw = 'https://twitter.com/tiendamiacom?ref_src=twsrc%5Etfw';
                $widget_yt = 'https://www.youtube.com/channel/UCje2Ylf4fy2C18LKvuIK1WQ';
                break;
            case 'co':
                $widget_fb = 'https://www.facebook.com/TiendaMIAcomCO';
                $widget_ig = 'https://www.instagram.com/tiendamiacom/';
                $widget_tw = 'https://twitter.com/tiendamiacom?ref_src=twsrc%5Etfw';
                $widget_yt = 'https://www.youtube.com/channel/UCje2Ylf4fy2C18LKvuIK1WQ';
                break;
            case 'pe':
                $widget_fb = 'https://www.facebook.com/TiendaMIAcomPE';
                $widget_ig = 'https://www.instagram.com/tiendamiacom_pe/';
                $widget_tw = 'https://twitter.com/TiendaMIAcom_PE?ref_src=twsrc%5Etfw';
                $widget_yt = 'https://www.youtube.com/channel/UCje2Ylf4fy2C18LKvuIK1WQ';
                break;
            case 'uy':
                $widget_fb = 'https://www.facebook.com/TiendaMIAcom';
                $widget_ig = 'https://www.instagram.com/tiendamiacom/';
                $widget_tw = 'https://twitter.com/tiendamiacom?ref_src=twsrc%5Etfw';
                $widget_yt = 'https://www.youtube.com/channel/UCje2Ylf4fy2C18LKvuIK1WQ';
                break;
            case 'br':
                $widget_fb = 'https://www.facebook.com/Tiendamiacom-BR-366072953868180/';
                $widget_ig = 'https://www.instagram.com/tiendamiacom_br/';
                $widget_tw = '';
                $widget_yt = '';
                break;
            default:
                $widget_fb = 'https://www.facebook.com/TiendaMIAcom';
                $widget_ig = 'https://www.instagram.com/tiendamiacom/';
                $widget_yt = 'https://www.youtube.com/channel/UCje2Ylf4fy2C18LKvuIK1WQ';
        } ?>
        <?php echo $widget_fb ?>
        <?php echo $widget_fb ?>
        <?php echo $widget_ig ?>
        <?php echo $widget_ig ?>
        <?php echo $this->__('Seguir') ?>
        <?php if ($base_store == 'br') {
            echo 'hidden';
        } ?>
        <?php echo $widget_tw ?>
        <?php echo $widget_tw ?>
        <?php if ($base_store == 'br') {
            echo 'hidden';
        } ?>
        <?php echo $widget_yt ?>
        <?php echo $widget_yt ?>
    <?php } ?>
    <?php echo $this->__('¡Reg&iacute;strate a nuestro Newsletter!') ?>
    <?php echo $this->getChildHtml('newsletter'); ?>
    <?php echo $this->__('M&aacute;s Categor&iacute;as') ?>
    <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('mas-categorias-footer')->toHtml(); ?>
    <?php echo $this->__('Informaci&oacute;n &uacute;til') ?>
    <?php echo $this->getChildHtml('cms_footer_links') ?>
    <?php echo $this->getChildHtml('footer_links') ?>
    <?php echo $this->__('Todo en un solo lugar') ?>
    <?php echo $this->__('Env&iacute;o Asegurado') ?>
    <?php echo $this->__('Garant&iacute;a de Entrega') ?>
    <?php echo $this->__('Productos Originales') ?>
    <?php echo $this->__('El mejor Precio') ?>
    <?php echo $this->__('Compra f&aacute;cil, r&aacute;pido y seguro') ?>
    <?php echo $this->__('Compra con tranquilidad') ?>
    <?php echo $this->__('TiendaMIA cuenta con los certificados verificados para garantizar la seguridad de la compra.') ?>
    <?php echo $this->__('Contacto') ?>
    <?php echo $this->__('Lunes a Viernes de 9 a 17hs') ?>
    <?php echo $this->__('Preguntas Frecuentes / Contacto') ?>
    <?php echo $this->getUrl('') ?>
    <?php echo $this->__('Trabaja con nosotros') ?>
    <?php echo $this->__('Propiedad Intelectual') ?>
    <?php echo $this->__('Pol&iacute;tica de Calidad') ?>
    <?php echo $this->__('Métodos de Pago') ?>
    <?php if ($base_store != 'xxxx') { ?>
        <?php $paypal_logo = Mage::getBlockSingleton('paypal/logo'); ?>
        <?php echo $paypal_logo->getAboutPaypalPageUrl() ?>
    <?php } ?>
    <?php if ($base_store == 'uy') { ?>
    <?php } elseif ($base_store == 'ar') { ?>
    <?php } elseif ($base_store == 'cl') { ?>
    <?php } elseif ($base_store == 'co') { ?>
        <?php echo $this->getSkinUrl('images/colombia/pse.png'); ?>
    <?php } elseif ($base_store == 'mx') { ?>
        <?php //echo $this->getSkinUrl('images/mexico/banamex.png');  ?>
        <?php //echo $this->getSkinUrl('images/mexico/bancomer.png');  ?>
        <?php //echo $this->getSkinUrl('images/mexico/oxxo.png');  ?>
        <?php //echo $this->getSkinUrl('images/mexico/santander.png');  ?>
    <?php } elseif ($base_store == 'pe') { ?>
        <?php //echo $this->getSkinUrl('images/peru/pagoefectivo.png');  ?>
    <?php } ?>
    <?php echo $this->__('Certificados') ?>
    <?php echo $this->__('Premios') ?>
    <?php //echo $this->getLayout()->createBlock('cms/block')->setBlockId('bandera-footer')->toHtml();  ?>
    <?php echo $this->__('Developed by:') ?>
    <?php echo $this->__('© 2014'); ?>
    <?php echo date('Y'); ?>
    <?php echo $this->__('TiendaMIA.com - Todos los derechos reservados - Todas las marcas son propiedad de sus respectivos dueños'); ?>
<?php } else { ?>
    <?php echo $this->__('© 2014'); ?>
    <?php echo date('Y'); ?>
    <?php echo $this->__('TiendaMIA.com - Todos los derechos reservados - Todas las marcas son propiedad de sus respectivos dueños'); ?>
<?php } ?>
<?php if (Mage::getStoreConfig('general/tiendamiapromos/enabled_paypal') == 'xxxx') { ?>
<?php } ?>
<?php // POPOVERS CON MENSAJES EN CARRITO
if (strpos($current_url, 'checkout/cart') !== false) { ?>
    <?php if ($base_store == 'br') { ?>
    <?php } else { ?>
        <?php echo $this->getUrl('') ?>
    <?php } ?>
    <?php if ($base_store == 'uy' || $base_store == 'ar') { ?>
    <?php } else { ?>
        <?php echo $this->__('Paga menos agregando más productos al carrito.') ?>
    <?php } ?>
    <?php if ($base_store == 'uy' || $base_store == 'ar') { ?>
    <?php } else { ?>
        <?php echo $this->__('Descuenta 30% a partir del 3er kilo.') ?>
    <?php } ?>
    <?php if ($base_store == 'ar') { ?>
    <?php } ?>
<?php } ?>
<?php //$TaxRateCollection = Mage::getResourceModel('tax/calculation_rate_collection');
//$TaxRateCollection->addFieldToFilter('tax_country_id', 'ar');
//$TaxRate_json = $TaxRateCollection->toArray();
//echo json_encode($TaxRate_json);
?>
<?php if (!isset($_COOKIE["hidePopoverMid"])) {
    $limitante = Mage::getStoreConfig('carriers/customship/kilomitad_limit');
    $kilo_50off = Mage::getStoreConfig('carriers/customship/kilomitad');
    if ($kilo_50off) {
        $custom_total = Mage::helper('loadhelper')->getCartCustomSubTotal();
        $faltan = $limitante - $custom_total;
        if ($faltan > 0) {
            ?>
            <?php if (Mage::helper('loadhelper')->tieneOrdenes() == 0 || Mage::getSingleton('customer/session')->isLoggedIn() == 0) { ?>
            <?php } ?>
            <?php echo $faltan ?>
            <?php echo Mage::getStoreConfig('carriers/customship/country_name') ?>
        <?php }
    }
} ?>
<?php $current_url = Mage::helper('core/url')->getCurrentUrl();
if ((strpos($current_url, 'producto') == true || strpos($current_url, 'product') == true) && strpos($current_url, 'politicas-de-devolucion-de-productos') != true) {
    ?>
    <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('tabla_carters')->toHtml(); ?>
    <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('tabla_oshkosh')->toHtml(); ?>
    <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('new-size-chart')->toHtml(); ?>
<?php }
if (strpos($current_url, 'checkout/onepage') == false) {
    ?>
    <?php echo $this->__('Nombre'); ?>
    <?php echo $this->__('Nombre Requerido'); ?>
    <?php echo $this->__('Apellido') ?>
    <?php echo $this->__('Apellido Requerido'); ?>
    <?php echo $this->__('Sexo') ?>
    <?php echo $this->__('Elija su Sexo') ?>
    <?php echo $this->__('Hombre') ?>
    <?php echo $this->__('Mujer') ?>
    <?php echo $this->__('Informaci&oacute;n de Acceso a tu Cuenta') ?>
    <?php echo $this->__('Recibir Ofertas!') ?>
    <?php echo $this->__('E-mail') ?>
    <?php echo $this->__('E-mail Requerido'); ?>
    <?php echo $this->__('E-mail incorrecto'); ?>
    <?php echo $this->__('Confirmar  E-mail') ?>
    <?php echo $this->__('E-mail Requerido'); ?>
    <?php echo $this->__('Los E-mails no coinciden'); ?>
    <?php echo $this->__('Contrase&ntilde;a') ?>
    <?php echo $this->__('Minimo 6 Caracteres'); ?>
    <?php echo $this->__('Confirmar Contrase&ntilde;a') ?>
    <?php echo $this->__('Las Contrase&ntilde;as no coinciden'); ?>
    <?php echo $this->__('Registrarme') ?>
    <?php echo $this->__('¿Ya tienes una Cuenta?') ?>
    <?php echo $this->__('¡Inicia sesi&oacute;n aqu&iacute;!') ?>
    <?php echo $this->__('¿Ayuda?') ?>
<?php } ?>
<?php echo $this->__('RECUPERAR MI CONTRASE&Ntilde;A'); ?>
<?php echo $this->__('Por favor, ingresa tu email abajo y reibirás un link para restablecer tu contraseña.'); ?>
<?php echo $this->__('E-mail incorrecto'); ?>
<?php $loggedin = $this->helper('customer')->isLoggedIn();

if ($loggedin == 1) {

    $user_email = Mage::getSingleton('customer/session')->getCustomer()->getEmail();
    $tiendamia_email = '@tiendamiaconnect.com';
    $user_email_check = strpos($user_email, $tiendamia_email);
    if ($user_email_check !== false) { ?>
        <?php echo $this->__('Confirmar su e-mail'); ?>
        <?php echo $this->__('Por favor, ingresa tu email abajo para confirmar tu cuenta y poder realizar compras en tiendaMIA.'); ?>
        <?php echo $this->__('E-mail incorrecto'); ?>
        <?php if (isset($_GET['cambiar_email'])) {

            $nuevo_email = $_GET['cambiar_email'];
            $current_url = $this->helper('core/url')->getCurrentUrl();
            $current_url_explode_1 = explode('?', $current_url);
            $current_url_explode_aux = explode('&', $current_url_explode_1[1]);
            foreach ($current_url_explode_aux as $key => $current_url_explode_2) {
                if (strpos($current_url_explode_2, "cambiar_email") !== false)
                    unset($current_url_explode_aux[$key]);
            }
            $current_url = $current_url_explode_1[0];
            if ($current_url_explode_aux)
                $current_url .= "?" . implode('&', $current_url_explode_aux);

            $user_email = Mage::getSingleton('customer/session')->getCustomer()->getEmail();
            $user_fname = Mage::getSingleton('customer/session')->getCustomer()->getFirstname();
            $user_lname = Mage::getSingleton('customer/session')->getCustomer()->getLastname();
            $user_group = Mage::getSingleton('customer/session')->getCustomerGroupId();
            $customer = Mage::getModel('customer/customer');
            $customer->setWebsiteId(Mage::app()->getWebsite()->getId());
            $customer->loadByEmail($user_email);
            $customer->setEmail($nuevo_email);
            $customer->setFirstname($user_fname);
            $customer->setLastname($user_lname);
            $customer->setGroupId($user_group);
            try {
                $customer->save();
            } catch (Exception $e) {
                Zend_Debug::dump($e->getMessage());
            }
            Mage::getModel('newsletter/subscriber')->subscribe($nuevo_email);
            header('Location: ' . $current_url);
            //echo
        }

        ?>
    <?php }
}
?>
<?php // echo $this->__('PREGUNTAS FRECUENTES');  ?>
<?php // echo $this->getLayout()->createBlock('cms/block')->setBlockId('preguntas_frecuentes')->toHtml();  ?>
<?php // echo $this->__('T&eacute;rminos y Condiciones');  ?>
<?php // echo $this->getLayout()->createBlock('cms/block')->setBlockId('terminos_condiciones')->toHtml();  ?>
<?php echo $this->__('¿Qué es TiendaMIA?'); ?>
<?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('que_es_tiendamia')->toHtml(); ?>
<?php if (strpos($current_url, 'checkout/onepage') == false && (strpos($current_url, 'customer/account') == false)) { ?>
    <?php echo $base_store ?>
    <?php echo $this->__('¿C&oacute;mo comprar en TiendaMIA?') ?>
    <?php echo $this->__('Mas información') ?>
    <?php if ($base_store == 'br') { ?>
        <?php 'A TiendaMIA é a melhor maneira de comprar nos EUA e receber no Brasil, pagando apenas <strong>5,99 USD pelo frete internacional.</strong>' ?>
        <?php 'A fatura que acompanha o pacote é composta pelo custo dos produtos e frete internacional.' ?>
        <?php 'Enviando pelo o USPS e gastando menos de US $ 44 em produtos, a alfândega brasileira normalmente não cobra impostos.' ?>
        <?php 'Encontre mais de 1 bilhao de <strong>produtos da Amazon, eBay e Walmart.</strong>' ?>
        <?php 'Na TiendaMIA existem duas opções para envio. <strong>Frete com USPS Priority sem impostos Pré-Pagos</strong> ou envio com Courier Privado com Impostos Pré-Pagos (109% Flat).' ?>
        <?php 'Os livros nao têm impostos.' ?>
        <?php 'Receba seu pedido na sua casa ou no seu escritório.' ?>
    <?php } else if ($base_store == 'pe') { ?>
        <?php 'Con DNI puedes realizar hasta 3 compras anuales y la suma de los productos de dichas 3 compras no debe superar los 2.000 USD.' ?>
        <?php 'Con RUC, no hay límite en la cantidad de compras que puedes realizar. Si no tienes RUC, lo puedes gestionar en SUNAT.' ?>
        <?php 'Las órdenes que tengan hasta 200 USD en productos, no llevan impuestos.' ?>
        <?php 'Las órdenes mayores de 200 USD en productos, tienen  un costo de 27% en concepto de Impuestos y Gestión Aduanera.' ?>
        <?php 'Para ver el precio final de tu orden, agrega los productos al carrito y fíjate en él todo el detalle.' ?>
        <?php 'Dependiendo del lugar donde vives, puedes tener un costo de hasta 5.99 USD en el envío.' ?>
        <?php 'A partir del 3er Kilo, TiendaMIA ofrece un 30% de descuento en el costo del envio.' ?>
        <?php 'Puedes pagar en Soles o Dólares, con Tarjeta de Crédito en Cuotas, con PayPal o con Pago Efectivo.' ?>
        <?php 'La mayoría de las órdenes demoran entre 10 y 15 días hábiles. Algunas órdenes pueden demorar hasta 25 días hábiles.' ?>
        <?php 'Encuentra más de 1000 Millones de Productos de Amazon, eBay y Walmart.' ?>
    <?php } else if ($base_store == 'ar') { ?>
        <?php 'TiendaMIA es el mejor lugar para comprar todo lo que no hay en tu país.' ?>
        <?php 'Podés realizar 5 compras anuales de hasta 1000 USD en productos cada una.' ?>
        <?php 'Las órdenes viajan por correo privado directo a tu domicilio.' ?>
        <?php 'Podés pagar en pesos argentinos o en dólares, con tarjetas de crédito internacionales o locales y con tarjetas de débito.' ?>
        <?php 'Podés pagar entre 3 y 12 cuotas, dependiendo del banco emisor de la tarjeta. <a style="display:inline;" href="https://tiendamia.zendesk.com/hc/es/articles/115002986092-Pagos-en-cuotas">Conocé acá los planes</a>.' ?>
        <?php 'TiendaMIA.com se ocupa de todos los tramites de Aduana.' ?>
        <?php 'TiendaMIA.com se encarga de pagar todos los impuestos correspondientes.' ?>
        <?php 'Los precios no incluyen el envío y los impuestos. Para ver el precio final de tu orden, agrega los productos al carrito. ' ?>
        <?php 'Una vez que recibas en el paquete, tenés que declarar la recepción del mismo en la web de AFIP. Es un paso muy sencillo que requiere de Clave Fiscal 3.' ?>
        <?php 'Si no tenés Clave Fiscal 3, la podés obtener en minutos en cualquier dependencia de AFIP.' ?>
        <?php 'Hay productos que tienen impuestos bajos, como notebooks, tablets, Kindles y más. <a style="display:inline;" href="https://tiendamia.com/ar/impuestos-bajos">Conocé más aquí</a>.' ?>
        <?php 'Los libros no conllevan ningún impuesto y no consumen envíos.' ?>
        <?php 'Por cada envío, no podés comprar más de 3 artículos de la misma familia de productos.' ?>
    <?php } else if ($base_store == 'uy') { ?>
        <?php 'TiendaMIA es la forma más fácil de comprar en USA.' ?>
        <?php 'Disponés de 3 envíos sin pagar impuestos cada año. En cada envío podés gastar hasta USD 200 en productos. ' ?>
        <?php 'TiendaMIA.com se ocupa de todos los trámites de Aduana. Vos recibís el paquete en tu casa, sin sorpresas.' ?>
        <?php 'Podés pagar en pesos uruguayos o en dólares, con tarjetas de crédito internacionales o locales y con tarjetas prepagas.' ?>
        <?php 'En TiendaMIA.com podés encontrar más de 1000 Millones de Productos de Amazon, eBay y Walmart.' ?>
        <?php '<a style="display:inline;" href="https://tiendamia.zendesk.com/hc/es/articles/214132543-Informaci%C3%B3n-de-Aduanas">Aquí</a> podés ver los Productos Prohibidos por la Aduana.' ?>
        <?php 'Podés ver el precio final de tu orden agregando los productos al carrito.' ?>
        <?php 'Podés pagar en cuotas sin recargo con <a style="display:inline;" href="https://tiendamia.zendesk.com/hc/es/articles/115002983951-Pagos-en-Cuotas">estas tarjetas</a>.' ?>
        <?php 'A partir del 3er Kilo, TiendaMIA ofrece un 30% de descuento en el costo del envío.' ?>
        <?php 'Si realizás 3 compras en TiendaMIA.com, te llevás un kilo gratis para tu 4ta compra.' ?>
    <?php } else { ?>
        <?php $this->__('Busca los productos que quieras a través del buscador') ?>
        <?php $this->__('O a través de las categorias') ?>
        <?php $this->__('Agrega todos los productos que desees a tu carrito.') ?>
        <?php $this->__('Dirígete al carrito para concretar la compra.') ?>
        <?php $this->__('En el carrito da clic en Finalizar compra para abonar tu orden.') ?>
        <?php $this->__('Si ya estás registrado, ingresa a tu cuenta para finalizar la compra.') ?>
        <?php $this->__('Si no tienes una cuenta puedes hacerla en pocos pasos.') ?>
        <?php $this->__('Escoge el método de envío que más te convenga.') ?>
        <?php $this->__('Ingresa el método de pago con el que abonarás.') ?>
        <?php $this->__('Cuando hayas completado los campos da clic en Continuar para efectuar el pago.') ?>
    <?php } ?>
<?php } ?>
<?php // echo $this->__('Tracking de Ordenes');  ?>
<?php // echo $this->getLayout()->createBlock('cms/block')->setBlockId('tracking-orden')->toHtml();  ?>
<?php if (strpos($current_url, "registro") === false) { ?>
    <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('subscribe-popup-new')->toHtml(); ?>
<?php } ?>
<?php /*$current_url = Mage::helper('core/url')->getCurrentUrl();
if (strpos($current_url,'checkout/onepage') == false && strpos($current_url,'customer') == false && strpos($current_url,'sales') == false && strpos($current_url,'awraf') == false) {
?>
<!--
<div aria-hidden="true" role="dialog" tabindex="-1" class="modal hide fade modal-size-sp8" id="copiar_link" style="display: none;">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
<div class="modal-body">
<div class="content-login_header">
  <div class="login_header_title">
    <h2><?php echo $this->__('¿Como Copiar un Link?'); ?></h2>
  </div>
</div>
  <div class="preguntas_frecuentes_body">

  <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('copiar_link')->toHtml(); ?>

</div>
</div>
</div>
-->
<?php
}*/
?>
<?php // echo $this->__('Términos y Condiciones');  ?>
<?php //echo $this->getLayout()->createBlock('cms/block')->setBlockId('terminos_cotizador')->toHtml();  ?>
<?php //echo $this->getLayout()->createBlock('cms/block')->setBlockId('que_es_prex')->toHtml();  ?>
<?php //echo $this->getLayout()->createBlock('cms/block')->setBlockId('solicitar_prex')->toHtml();  ?>
<?php // echo $this->__('Pedidos Especiales');  ?>
<?php // echo $this->getLayout()->createBlock('cms/block')->setBlockId('pedidos_especiales')->toHtml();  ?>
<?php echo $this->__('INGRESAR A MI CUENTA'); ?>
<?php echo $this->__('Si ya est&aacute;s registrado, por favor ingresa.'); ?>
<?php echo $this->getUrl('', array('_secure' => Mage::app()->getFrontController()->getRequest()->isSecure())); ?>
<?php echo $this->__('Ingresa con tu usuario de TiendaMIA'); ?>
<?php echo $this->__('E-mail'); ?>
<?php echo $this->__('Contraseña'); ?>
<?php echo $this->__('E-mail o Contrase&ntilde;a incorrectos'); ?>
<?php echo $this->__('Entrar') ?>
<?php echo $this->__('&iquest;Olvidaste tu Contrase&ntilde;a?') ?>
<?php echo $this->__('Recup&eacute;rala aqu&iacute;') ?>
<?php echo $this->__('¿Necesitas Ayuda?') ?>
<?php echo $this->__('Preguntas Frecuentes') ?>
<?php echo $this->__('¿Nuevo por aqu&iacute;?') ?>
<?php echo $this->__('Reg&iacute;strate AHORA') ?>
<?php $fecha_actual_uy = date('Y-m-d H:i:s', strtotime($php_time . ' - 3 hours'));
$fecha_15_nov = date('2017-11-15 00:00:00', strtotime('-1 hour'));
$fecha_20_nov = date('2017-11-20 00:00:00', strtotime('-1 hour'));
if ($fecha_actual_uy > $fecha_20_nov) { ?>
<?php } elseif ($fecha_actual_uy > $fecha_15_nov) { ?>
<?php } else { ?>
<?php } ?>
<?php if (strpos($current_url, 'ciberlunes') != false || strpos($current_url, 'cyberweek') != false) { ?>
    <?php if (strpos($current_url, 'ciberlunes') != false) { ?>
    <?php } else { ?>
    <?php } ?>
<?php } ?>
<?php if (strpos($current_url, 'invitar-amigos') != false) { ?>
<?php } ?>
<?php if (!isset($_COOKIE["location"]) && !Mage::getSingleton('customer/session')->isLoggedIn()) { ?>
    <?php $storeNames ?>
<?php } ?>
<?php if (strpos($current_url, 'checkout/onepage') !== false && $base_store == 'uy') { ?>
    <?php //FIXME: Hay que cambiar la forma en la que se carga el iframe.  ?>
<?php } ?>
<?php if ($base_store == 'ar' && strpos($current_url, 'checkout/cart') !== false) { ?>
<?php } ?>
<?php if (strpos($current_url, 'checkout/cart') != false) { ?>
    <?php if ($base_store == 'mx') { ?>
    <?php } elseif ($base_store == 'co') { ?>
    <?php } ?>
<?php } ?>
<?php //echo $this->getUrl('')  ?>
<?php // echo $this->getUrl('')  ?>
<?php // echo $this->getUrl('')  ?>
<?php // echo $this->getUrl('')  ?>
<?php // echo $this->getUrl('')  ?>
<?php // echo $this->getUrl('')  ?>
<?php //echo $this->getUrl('')  ?>
<?php // echo $this->getUrl('')  ?>
<?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('latampass')->toHtml(); ?>
<?php echo Mage::helper('core/url')->getCurrentUrl() ?>
<?php echo $this->getUrl('youama_ajaxlogin/ajax/index', array('_secure' => Mage::app()->getFrontController()->getRequest()->isSecure())); ?>
<?php echo $this->getUrl('tiendamiac_ajaxapi/ajax/index', array('_secure' => Mage::app()->getFrontController()->getRequest()->isSecure())); ?>
<?php echo $this->getUrl('tiendamiac_ajaxapi/ajax/index', array('_secure' => Mage::app()->getFrontController()->getRequest()->isSecure())); ?>
<?php echo $this->getUrl(); ?>
<?php echo $this->getUrl('youama_ajaxlogin/ajax/index', array('_secure' => Mage::app()->getFrontController()->getRequest()->isSecure())); ?>
<?php if (strpos($current_url, 'checkout/onepage') == false) {
    if (Mage::getStoreConfig('general/tiendamiapromos/enabled_paypal') == 'xxx') { ?>
    <?php }
} ?>
<?php echo $this->getUrl('ajaxapi/ajax/getsearchechoslider2', array('_secure' => Mage::app()->getFrontController()->getRequest()->isSecure())); ?>
<?php echo $this->getSkinUrl('js/slick.min.js') ?>
<?php echo $this->__('Centro de Ayuda') ?>
<?php if (isset($_COOKIE["headway"])) {

    echo '<script language="JavaScript1.1" src="//pixel.mathtag.com/event/js?mt_id=1056635&mt_adid=170663&v1=&v2=&v3=&s1=&s2=&s3="></script>';

}

?>
<?php if (strpos($current_url, 'checkout/cart') !== false) { ?>
<?php } ?>
<?php echo $this->getUrl('tiendamiac_ajaxapi/ajax/index', array('_secure' => Mage::app()->getFrontController()->getRequest()->isSecure())); ?>
<?php if (strpos($current_url, 'checkout/cart') !== false) { ?>
<?php } ?>
<?php if (strpos($current_url, 'checkout/onepage') == false && (strpos($current_url, 'customer/account') == false)) { ?>
    <?php if ($base_store == 'br') { ?>
    <?php } else { ?>
    <?php } ?>
<?php } ?>
<?php echo Mage::getSingleton('customer/session')->isLoggedIn() ? '2;' : '1;' ?>
<?php echo Mage::getUrl(''); ?>
<?php echo Mage::app()->getStore()->getCode(); ?>
<?php echo Mage::getUrl(''); ?>
<?php echo Mage::app()->getStore()->getCode(); ?>
