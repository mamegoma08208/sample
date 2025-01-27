<?php get_header();?>
<main>
    <section class="main-visual">
        <h1>sample</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/      "alt="">
    </section>
    <section class="news">
        <h2 class="index-h2">NEWS</h2>
            <ul class ="news_flex">
                <li>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/   " alt="">
                    </p>
                    <p>テキスト</p>
                </li>
                <li>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/   " alt="">
                    </p>
                    <p>テキスト</p>
                </li>
                <li>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/   " alt="">
                    </p>
                    <p>テキスト</p>
                </li>
            </ul>
    </section>
    <section class="service">
        <h2 class="index-h2">サービス・製品</h2>
             <ul class="service_flex">
                <li>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/   " alt="">
                    </p>
                    <p>テキスト</p>
                </li>
                <li>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/   " alt="">
                    </p>
                    <p>テキスト</p>
                </li>
            </ul> 
            <ul class="service_flex">
                <li>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/   " alt="">
                    </p>
                    <p>テキスト</p>
                </li>
                <li>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/   " alt="">
                    </p>
                    <p>テキスト</p>
                </li>
            </ul>
            <ul class="service_flex">
                <li>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/   " alt="">
                    </p>
                    <p>テキスト</p>
                </li>
                <li>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/   " alt="">
                    </p>
                    <p>テキスト</p>
                </li>
            </ul>
    </section>
    <section class="contact">
    <h2 class="index-h2">CONTACT</h2>
                <form>
                    <div>
                        <div class="contact-heading">
                            <label class="contact-label">お名前<span class="contact-span">必須</span></label>
                        </div>
                        <div>
                            <input type="text" name="name" placeholder="入力してください" class="contact-textbox">
                        </div>
                    </div>
                     <div>
                        <div class="contact-heading">
                            <label class="contact-label">フリガナ<span class="contact-span">必須</span></label>
                        </div>
                        <div>
                            <input type="text" name="hurigana" placeholder="入力してください" class="contact-textbox">
                        </div>
                     </div>
                     <div>
                        <div class="contact-heading">
                            <label class="contact-label">メールアドレス<span class="contact-span">必須</span> </label>
                        </div>
                        <div>
                            <input type="text" name="email" placeholder="入力してください" class="contact-textbox">
                        </div>
                     </div>
                     <div>
                        <div class="contact-heading">
                            <label class="contact-label">電話番号<span class="contact-span">必須</span></label>
                        </div>
                        <div>
                            <input type="text" name="tel" placeholder="入力してください" class="contact-textbox">
                        </div>
                     </div>
                     <div>
                        <div class="contact-heading">
                            <label class="contact-label">お問い合わせ内容<span class="contact-span">必須</span> </label>
                        </div>
                        <div>
                            <textarea class="contact-textarea" placeholder="入力してください" name="message"></textarea>
                        </div>
                     </div>
                     <div>
                        <div class="contact-heading">
                            <label class="contact-label">ご希望の連絡先<span class="contact-span">必須</span> </label>
                            </div>
                        <div>
                            <input class="radiobutton" type="radio" value="tel" name="contact" checked><label>お電話</label>
                            <input class="radiobutton" type="radio" value="mail" name="contact"><label>メール</label>
                            <input class="radiobutton" type="radio" value="both" name="contact"><label>どちらでも</label>
                        </div>
                     </div>
                     <div>
                        <div class="contact-heading">
                            <label class="contact-label">個人情報のお取り扱い</label>
                        </div>
                        <div>
                            <details>
                                <summary>お問い合わせフォームの個人情報の取り扱いについて</summary>
                                <div>
                                    <span>1.組織の名称又は氏名</span><br>
                                    株式会社Sample<br><br>
                                    <span>個人情報管理者（若しくはその代理人）の氏名又は職名、所属及び連絡先
                                      鈴木 一郎 コーポレート部</span><br>
                                    メールアドレス:samurai@example.com<br>
                                    TEL:03-1234-5678<br>
                                    <span>3.個人情報の利用目的</span><br>
                                    ・本サービス及び本サービスに関連する情報の提供又はそれらに関する連絡のため<br>
                                    ・ユーザーの本人確認のため<br>
                                    ・当社サービスのご案内のため<br>
                                    ・当社の商品等の広告または宣伝（電子メールによるものを含むとします。）<br><br>
                                    <span>4.個人情報の取り扱い業務の委託</span><br>
                                    個人情報の取り扱い業務の全部または一部を外部に業務委託する場合があります。<br>
                                    その際、弊社は、個人情報を適切に保護できる管理体制を敷き実行していることを条件として<br>
                                    委託先を厳選したうえで、機密保持契約を委託先と締結し、お客様の個人情報を厳密に管理させます。<br><br>
                                    <span>5.個人情報の開示等の請求</span><br>
                                    お客様は、弊社に対して個人情報の開示等（利用目的の通知、開示、内容の訂正・追加・削除、利用の停止または消去、第三者への提供の停止）に関して、当社問い合わせ窓口に申し出ることができます。<br>
                                    その際、弊社はお客様ご本人を確認させていただいたうえで、合理的な期間内に対応いたします。<br><br>
                                    なお、個人情報に関する弊社問い合わせ先は、次の通りです。<br><br>
                                    株式会社SocialTech 個人情報問合せ窓口<br>
                                    〒101-0022 東京都千代田区神田練塀町300番地 住友不動産秋葉原駅前ビル5F<br>
                                    メールアドレス:samurai@example.com  TEL:03-1234-5678<br><br>
                                    <span>6.個人情報を提供されることの任意性</span><br><br>
                                    お客様がご自身の個人情報を弊社に提供されるか否かは、お客様のご判断によりますが、もしご提供されない場合は、適切なサービスが提供できない場合がございますので予めご了承ください。
                                </div>
                            </details>
                            <input type="checkbox" name="agree">
                            <span>個人情報の取り扱いについてご同意いただける場合は、チェックしてください。</span>
                        </div>
                     </div>
                     <input type="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/  " alt="送信する">
                </form>

</main>
<?php get_footer();?>