<?php

class FirstCest
{
    public function test(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->Click(['xpath' => '//div[@id="footer-general_14"]//li[1]/a']);
        $I->FillField(['xpath' => '//input[@id="login_main_login"]'], 'rafaelevna13a@yandex.ru');
        $I->FillField(['xpath' => '//input[@id="psw_main_login"]'], 'pftqrewxxlgtyher');
        $I->Click(['xpath' => '//form[@name="main_login_form"]//button[@name="dispatch[auth.login]"]']);
        sleep(1);
        $I->Click(['xpath' => '//div[@id="sw_dropdown_4"]//a[1]']);
        $I->Click(['xpath' => '//div[@id="account_info_4"]//ul//li[3]//a']);
        // Посмотреть название отдела
        $I->see('Marketing department');
        // Перейти в отдел
        $I->Click(['xpath' => '//a[@title="Marketing department"]']);
        sleep(1);
        // Проверить работников отдела
        $I->see('Customer Customer');
        $I->see('Ivan Petrov');
        $I->makeHtmlSnapshot();
        // Выйти из аккаунта
        $I->Click(['xpath' => '//div[@id="sw_dropdown_4"]/a']);
        $I->Click(['xpath' => '//div[@class="ty-account-info__buttons buttons-container"]/a']);
        sleep(1);
        $I->dontSee('Sign out');
    }

}
