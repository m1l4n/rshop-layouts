<?php
$cart = array(
    '1' => array(
        'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
        'code' => 'KSP200001',
        'availability' => '> 20 ks na sklade',
        'quantity' => '2',
        'price' => '224,00 €',
        'price_ks' => '112,00 €'
    ),
    '2' => array(
        'name' => 'Kompresor STREND PRO AC V50',
        'code' => 'KSP200001',
        'availability' => 'Posledné 2 kusy na sklade',
        'quantity' => '1',
        'price' => '224,00 €',
        'price_ks' => '112,00 €'
    ),
    '3' => array(
        'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
        'code' => 'KSP200001',
        'availability' => '> 20 ks na sklade',
        'quantity' => '2',
        'price' => '224,00 €',
        'price_ks' => '112,00 €'
    ),
    '4' => array(
        'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
        'code' => 'KSP200001',
        'availability' => '> 20 ks na sklade',
        'quantity' => '2',
        'price' => '224,00 €',
        'price_ks' => '112,00 €'
    ),
    '5' => array(
        'name' => 'Kompresor STREND PRO AC V50',
        'code' => 'KSP200001',
        'availability' => 'Posledné 2 kusy na sklade',
        'quantity' => '1',
        'price' => '224,00 €',
        'price_ks' => '112,00 €'
    ),
    '6' => array(
        'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
        'code' => 'KSP200001',
        'availability' => '> 20 ks na sklade',
        'quantity' => '2',
        'price' => '224,00 €',
        'price_ks' => '112,00 €'
    ),
);
?>

<div class="cart__products__header">
    <div class="cart__products__item cart__products__item--header col-xs-34 col-lg-37">Informácie o produkte</div>
    <div class="cart__products__item cart__products__item--header col-xs-21 col-lg-21">Dostupnosť</div>
    <div class="cart__products__item cart__products__item--header col-xs-16 col-lg-16">Počet</div>
    <div class="cart__products__item cart__products__item--header col-xs-24 col-lg-21">Cena spolu</div>
    <div class="cart__products__item cart__products__item--header col-xs-5 col-lg-5"></div>
</div>
<div class="cart__products__body">
    <?php foreach ($cart as $id => $item) { ?>
    <div class="cart__products__row">
        <div class="cart__products__item cart__products__item--name col-xs-34 col-lg-37">
            <strong><?= $item['name'] ?></strong>
            <?= $item['code'] ?>
        </div>
        <div class="cart__products__item cart__products__item--availability col-xs-21 col-lg-21">
            <div class="valign"><?= $item['availability'] ?></div>
        </div>
        <div class="cart__products__item cart__products__item--quantity col-xs-16 col-lg-16">
            <div class="valign">
                <input name="product_buy" value="1" class="ui-spinner">
            </div>
        </div>
        <div class="cart__products__item cart__products__item--price col-xs-24 col-lg-21">
            <div class="valign">
                <strong><?= $item['price'] ?></strong> bez DPH
                <span><?= ($item['quantity'] > 1) ? $item['quantity'] . 'x ' . $item['price_ks'] : '' ?></span>
            </div>
        </div>
        <div class="cart__products__item cart__products__item--delete col-xs-5 col-lg-5">
            <a href="#" title="Odstrániť produkt z košíka" class="ico__hover">
                <i class="ico ico--delete--gray orig"></i>
                <i class="ico ico--delete--red hover"></i>
            </a>
        </div>
    </div>
    <?php } ?>
</div>