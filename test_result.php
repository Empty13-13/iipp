<!DOCTYPE html><html lang="ru"> <head>   <title>Результат теста</title>   <meta charset="UTF-8">   <meta name="format-detection" content="telephone=no">   <link rel="stylesheet" href="css/style.css">   <link rel="shortcut icon" href="favicon.ico">   <!-- <meta name="robots" content="noindex, nofollow"> -->   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">   <meta name="viewport" content="width=device-width, initial-scale=1.0"> </head><script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script><body>  <?php    $initials = $_POST['initials'];    $email = $_POST['email'];        $score = 3.125;    $result_test = $_POST['result_test'];     $results = json_decode($result_test, TRUE);     $present = $results['Present'] * $score;    $melancholic = $results['Melancholic'] * $score;    $sanguine = $results['Sanguine'] * $score;    $past = $results['Past'] * $score;    $phlegmatic = $results['Phlegmatic'] * $score;    $future = $results['Future'] * $score;    $temporary = $results['Temporary'] * $score;    $choleric = $results['Choleric'] * $score;  ?>  <div class="wrapper wrapper-test_result">    <main class="page">      <section class="result section-test_result">        <div class='result__content _container'>          <h1 class="result__title">Ваш результат интегрального теста личности (ИТЛ)</h1>          <canvas id="myChart" class="result__img"></canvas>          <div class="result__block-level block-level-result">            <ul class="block-level-result__list">              <li>                <picture><source srcset="img/icons/Ellipse_1.svg" type="image/webp"><img src="img/icons/Ellipse_1.svg" alt="" class="block-level-result__img-"></picture>                <p class="block-level-result__text">- Верхняя норма</p>              </li>              <li>                <picture><source srcset="img/icons/Ellipse_2.svg" type="image/webp"><img src="img/icons/Ellipse_2.svg" alt="" class="block-level-result__img-"></picture>                <p class="block-level-result__text">- Нижняя норма</p>              </li>              <li>                <picture><source srcset="img/icons/Ellipse_3.svg" type="image/webp"><img src="img/icons/Ellipse_3.svg" alt="" class="block-level-result__img-"></picture>                <p class="block-level-result__text">- Ваш результат</p>              </li>            </ul>          </div>          <div class="result__note">            <p><span>Примечание:</span> в теорию Интегрального теста личности (ИТЛ) заложено, что каждый человек              обладает качествами всех темпераментов (меланхолик - холерик - сангвиник - флегматик), всеми частями              внимания (настоящее - прошлое - будущее - вневременное), представленными в разных пропорциях у различных              людей. В данном ключе представлены краткие описания отдельных шкал теста, позволяющие понять общие              тенденции в структуре личности тестируемого. Однако, профессиональное толкование требует оценки профиля в              целом, с учетом взаимоотношений разных Шкал в профиле. Такую расшифровку может дать только специально              подготовленный интегральный психолог. </p>          </div>        </div>      </section>      <section class="points section-test_result">        <div class='points__content _container'>          <h3 class="points__title">Количественная оценка: </h3>          <p class="points__norm">Средняя норма - 50 +/- 10 баллов (40-60) </p>          <ul class="points__list">            <li class="used-text"><span>от 33 до 69</span> – границы условной нормы </li>            <li class="used-text"><span>от 0 до 32</span> – недостаточное развитие качества </li>            <li class="used-text"><span>от 70 до 100</span> – избыток качества </li>          </ul>        </div>      </section>      <section class="capacity section-test_result">        <div class='capacity__content _container'>          <h2 class="capacity__title">Качественная оценка шкал:</h2>          <div class="capacity__block block-capacity">            <h3 class="block-capacity__title">Настоящее</h3>            <div class="block-capacity__result">Ваш результат: <?php echo $present; ?> <span>(Средняя норма: 40-60)</span></div>            <p class="block-capacity__text1">Настоящее – способность быть в настоящем, «здесь и теперь», хороший контакт              с реальностью, внимательность,              умение сохранять спокойствие.</p>            <p class="block-capacity__text2">              Снижение шкалы (менее 32 баллов) – неспособность удерживать внимание в настоящем, недостаточный контакт с              окружающей реальностью через ощущения, недооценка опасности (неосторожность) и выгоды (упущенные              возможности). Обычно у тестируемого слишком быстрые роды или рождение путем кесарева сечения.            </p>            <p class="block-capacity__text3"> Повышение шкалы (более 69 баллов) – слишком сильная фиксация внимания на              настоящем контакте с окружающей реальностью через ощущения (выраженный кинестетик), чрезмерная пассивность              тестируемого, инертность,              трудность приступать к новым делам, чрезмерная осторожность или лень. Обычно у тестируемого затяжные или              осложненные роды, низкий балл после рождения по Шкале Апгар, осложнения после родового периода.            </p>          </div>          <div class="capacity__block block-capacity">            <h3 class="block-capacity__title">Меланхолик</h3>            <div class="block-capacity__result">Ваш результат: <?php echo $melancholic; ?> <span>(Средняя норма: 40-60)</span></div>            <p class="block-capacity__text1">Меланхолик – способность к самодисциплине, быть ответственным перед другими              людьми, быть исполнителем, способность              к монотонному труду, требовательность к себе.</p>            <p class="block-capacity__text2">              Снижение шкалы (менее 32 баллов) – неспособность или нежелание брать на себя ответственность перед людьми,              быть в              роли исполнителя, недостаточная самодисциплина, неспособность к монотонному труду.            </p>            <p class="block-capacity__text3">              Повышение шкалы (более 69 баллов) – гиперответственность перед другими людьми, склонность к излишней              самокритике и              самообвинениям, гипертрофированное чувство вины, чувство долга перед другими, неуверенность в себе и в              своих              силах, чрезмерная доверчивость, склонность к депрессии.            </p>          </div>          <div class="capacity__block block-capacity">            <h3 class="block-capacity__title">Прошлое</h3>            <div class="block-capacity__result">Ваш результат: <?php echo $past; ?> <span>(Средняя норма: 40-60)</span></div>            <p class="block-capacity__text1">Прошлое – способность удерживать внимание на образах прошлого, хорошая              память, умение адекватно анализировать              события прошлого, делать «работу над ошибками» и не повторять их, хороший слух, развитый аудиальный канал              восприятия.</p>            <p class="block-capacity__text2">              Снижение шкалы (менее 32 баллов) – неспособность или нежелание думать о прошлом, извлекать уроки из него,              плохая              (короткая) память, неспособность удерживать внимание, концентрировать его, не желание «ворошить прошлое»,              «копаться» в нем, не достаточная осознанность факта повторения своих ошибок, «наступания на одни и те же              грабли». </p>            <p class="block-capacity__text3">Повышение шкалы (более 69 баллов) – «застревание» в прошлом, зацикленность              на нем, стремление анализировать только              что сделанное, трудность заканчивать дела, неспособность отключать внимание, чрезмерная приверженность к              коллективным ценностям, сильная зависимость от семьи, культурных норм, научных авторитетов, общепринятой              морали.            </p>          </div>          <div class="capacity__block block-capacity">            <h3 class="block-capacity__title">Холерик</h3>            <div class="block-capacity__result">Ваш результат: <?php echo $choleric; ?> <span>(Средняя норма: 40-60)</span></div>            <p class="block-capacity__text1">Холерик – способность к контролю за внешним окружением, бдительность,              способность управлять параллельно              несколькими людьми и процессами, брать ответственность за них, требовательность к другим.            </p>            <p class="block-capacity__text2">Снижение шкалы (менее 32 баллов) – неспособность или нежелание брать на              себя ответственность за других людей,              контролировать их деятельность и работу, не способность быть организатором, в том числе своей жизни, уход              от              ответственности за других и избегание деятельности, в которой нужно контролировать параллельно несколько              задач,              общаться с несколькими людьми.</p>            <p class="block-capacity__text3">Повышение шкалы (более 69 баллов) – гиперответственость за других людей,              навязчивое стремление всех              контролировать, навязывать свою волю и свои решения, неспособность делегировать ответственность,              потребность              «помогать», вмешиваться в чужие дела, ревность, подозрительность, занудство, навязчивые идеи и действия.            </p>          </div>          <div class="capacity__block block-capacity">            <h3 class="block-capacity__title">Будущее</h3>            <div class="block-capacity__result">Ваш результат: <?php echo $future; ?> <span>(Средняя норма: 40-60)</span></div>            <p class="block-capacity__text1">Будущее – способность переключать внимание, визуализировать образы              будущего, легкость в начале дел («на подъем»),              способность перестраиваться, подстраиваясь под изменения внешней ситуации, активно адаптироваться к ней.            </p>            <p class="block-capacity__text2">Снижение шкалы (менее 32 баллов) – неспособность принимать быстрые решения,              перестраиваться по ходу действия,              своевременно и с необходимой энергией реагировать на внешние условия, не достаточная живость ума,              сообразительность.</p>            <p class="block-capacity__text3">Повышение шкалы (более 69 баллов) – перевозбуждение, слишком быстрая и              избыточная по силе реакция на раздражители,              стремление «бежать впереди собственной тени», взрывной характер, склонность фантазировать, поспешность в              выводах и              реализации своих планов.</p>          </div>          <div class="capacity__block block-capacity">            <h3 class="block-capacity__title">Сангвиник</h3>            <div class="block-capacity__result">Ваш результат: <?php echo $sanguine; ?> <span>(Средняя норма: 40-60)</span></div>            <p class="block-capacity__text1">Сангвиник – способность генерировать идеи и находить новые, нестандартные              решения, оригинальность, креативность,              изобретательность, находчивость, веселость, способность быть уникальным специалистом.            </p>            <p class="block-capacity__text2">Снижение шкалы (менее 32 баллов) – стереотипность мышления, неспособность              находить нестандартные решения, не              понимание, чего тестируемый хочет, вплоть до отсутствия собственных желаний, безрадостность, неспособность              находиться в центре внимания.</p>            <p class="block-capacity__text3">Повышение шкалы (более 69 баллов) – самоуверенность, хвастливость,              маниакальное перевозбуждение, навязчивое              изобретательство, мания величия, чувство собственной исключительности, самовлюбленность, нарциссизм,              жадность,              ощущение вседозволенности и непогрешимости, стремление быть незаменимым, привлекать к себе чрезмерное              внимание.            </p>          </div>          <div class="capacity__block block-capacity">            <h3 class="block-capacity__title">Вневременное</h3>            <div class="block-capacity__result">Ваш результат: <?php echo $temporary; ?> <span>(Средняя норма: 40-60)</span></div>            <p class="block-capacity__text1">Вневременное – способность отключать внимание, расслабляться, отдыхать,              останавливаться, заканчивать дела,              отношения, расставаться с ненужными мыслями, вещами и людьми.            </p>            <p class="block-capacity__text2">Снижение шкалы (менее 32 баллов) – неспособность к расслаблению и отдыху,              трудность заканчивать дела и отношения,              не способность делать окончательные выводы, приходить к решениям, высвободить внимание из размышления на              какую-то              тему, чтобы потом переключить его на что-то другое.            </p>            <p class="block-capacity__text3">Повышение шкалы (более 69 баллов) – рассеянность, чрезмерная              расслабленность, вялость, пребывание в прострации,              слишком быстрое торможение и окончание дел и отношений, когда они еще возможно не закончены, доминирование              индивидуальных (либеральных) ценностей, вседозволенность, излишняя толерантность к чему угодно.            </p>          </div>          <div class="capacity__block block-capacity">            <h3 class="block-capacity__title">Флегматик</h3>            <div class="block-capacity__result">Ваш результат: <?php echo $phlegmatic; ?> <span>(Средняя норма: 40-60)</span></div>            <p class="block-capacity__text1">Флегматик – способность не вмешиваться, наблюдать со стороны, сохранять              силы и энергию, сохранять трезвость ума,              дальновидность, стратегическое мышление, способность к разумному инвестированию, добродушие.            </p>            <p class="block-capacity__text2">Снижение шкалы (менее 32 баллов) – неспособность быть экономным и              бережливым, расточительность в материальных              ресурсах и в собственных силах, трудности с абстрагированием от ситуации, не способность посмотреть на              ситуацию в              целом, не достаток терпимости.            </p>            <p class="block-capacity__text3">Повышение шкалы (более 69 баллов) – чрезмерный либерализм, скупость,              равнодушие, попустительство, эмоциональная              холодность и тупость, апатия, скептицизм, неверие никому и ни во что, жадность, накопительство, не желание              или              неспособность брать на себя ответственность за других людей, жизненные ситуации.            </p>          </div>        </div>      </section>      <section class="consultation section-test_result">        <form action="consultation.php" method="post">          <div class='__content _container'>            <p class="consultation__text">Вы можете получить подробную расшифровку профиля и практические рекомендации от            нашего специалиста на <span>бесплатной</span> онлайн-консультации</p>            <div class="consultation__bottom">              <input type="hidden" name="initials" value="<?php echo $initials; ?>" required>              <input type="hidden" name="email" value="<?php echo $email; ?>" required>              <input id="send_result" type="submit" value="Получить консультацию" class="consultation__but consultation__but-text">            </div>          </div>        </form>      </section>    </main>    <footer class="footer">  <div class="footer__content _container">    <div class="footer__column">      <div class="footer__data data-footer">        <ul class="data-footer__socials">          <li class="data-footer__socials_text">Данные Ассоциации ШИПП «2х2»</li>          <li class="data-footer__socials_text">238315, Калининградская обл., Гурьевский район, пос. Матросово, ул.            Чехова, д. 9 </li>          <li class="data-footer__socials_text"><a href="tel:+79992550495">тел. +7-999-255-0495</a></li>        </ul>        <ul class="data-footer__documents">          <li class="data-footer__documents_text">ИНН 2902046102</li>          <li class="data-footer__documents_text">КПП 390601001</li>        </ul>      </div>    </div>    <div class="footer__column">      <div class="footer__socials socials-footer">        <div class="socials-footer__links">          <a href="" class="socials-footer__link"><picture><source srcset="img/icons/vk.svg" type="image/webp"><img src="img/icons/vk.svg" alt=""></picture></a>          <a href="" class="socials-footer__link"><picture><source srcset="img/icons/telegram.svg" type="image/webp"><img src="img/icons/telegram.svg" alt=""></picture></a>          <a href="" class="socials-footer__link"><picture><source srcset="img/icons/inst.svg" type="image/webp"><img src="img/icons/inst.svg" alt=""></picture></a>        </div>        <a href="policy.html" class="socials-footer__policy">Политика конфидициальности</a>      </div>    </div>  </div></footer>  </div>  <div class="popup popup__test">  <div class="popup__content">    <div class="popup__body">      <div class="popup__close"></div>      <div class="popup__elems elems-popup">        <div class="elems-popup__top">          <div class="elems-popup__title">Интегральный тест личности(ИТЛ)</div>        </div>        <div class="elems-popup__middle">          <p class="elems-popup__text1">Вам предлагается тест из 128 утверждений. Утверждения читайте внимательно и            ответы давайте максимально искренне и без длительных раздумий.          </p>          <p class="elems-popup__text2"> Заполните контактную информацию чтобы мы могли отправить Вам результаты.</p>          <div class="elems-popup__form form-elems-popup">            <div class="form-elems-popup__column">              <div class="form-elems-popup__name">ФИО<span>*</span></div>              <input type="text" class="form-elems-popup__input form-elems-popup__input_name">              <div class="form-elems-popup__error-text form-elems-popup__error-text_name"></div>            </div>            <div class="form-elems-popup__column">              <div class="form-elems-popup__name">E-mail<span>*</span></div>              <input type="text" class="form-elems-popup__input form-elems-popup__input_email">              <div class="form-elems-popup__error-text form-elems-popup__error-text_email"></div>            </div>          </div>        </div>        <div class="elems-popup__bottom bottom-elems-popup">          <a onclick="valid()" class="bottom-elems-popup__but">            <div class="bottom-elems-popup__but-text">Начать</div>          </a>          <p class="bottom-elems-popup__policy">Нажимая на кнопку вы даёте своё согласие            на обработу <a href="policy.html">персональных данных</a>          </p>        </div>      </div>    </div>  </div></div><div class="popup popup__consultation">  <div class="popup__content">    <div class="popup__body">      <div class="popup__close"></div>      <div class="popup__elems elems-popup">        <div class="elems-popup__top">          <div class="elems-popup__title">Запись на онлайн-консультацию</div>        </div>        <div class="elems-popup__middle-cons">          <div class="elems-popup__middle-column">            <div class="elems-popup__data-socials data-socials-elems-popup">              <p class="data-socials-elems-popup__tel-name">Номер телефона<span>*</span></p>              <input placeholder="+7 (000) 000 - 00 - 00" type="text"                class="data-socials-elems-popup__input data-socials-elems-popup__input_tel">              <p class="data-socials-elems-popup__messanger-text">Выберите в каком из мессенджеров                Вам будет удобнее получить онлайн-консультацию<span>*</span></p>              <ul class="data-socials-elems-popup__messangers">                <li>                  <input type="radio" id="contactChoice1" name="contact" value="viber"                    class="data-socials-elems-popup__messanger-viber radio">                  <label for="contactChoice1" class="data-socials-elems-popup__messanger-viber-text">Viber </label>                </li>                <li>                  <input type="radio" id="contactChoice2" name="contact" value="WhatsApp"                    class="data-socials-elems-popup__messanger-whatsapp radio">                  <label for="contactChoice2" class="data-socials-elems-popup__messanger-whatsapp-text">WhatsApp                  </label>                </li>                <li>                  <input type="radio" id="contactChoice3" name="contact" value="Telgram"                    class="data-socials-elems-popup__messanger-telegram radio">                  <label for="contactChoice3" class="data-socials-elems-popup__messanger-telegram-text">Telegram</label>                </li>              </ul>            </div>          </div>          <div class="elems-popup__middle-column">            <div class="elems-popup__data-date data-date-elems-popup">              <p class="data-date-elems-popup__time-text">Укажите удобное время для консультации<span>*</span></p>              <div class="data-date-elems-popup__block block-data-date-elems-popup">                <div class="block-data-date-elems-popup__date-title">Дата</div>                <input placeholder="ДД. ММ. ГГГГ" type="text"                  class="block-data-date-elems-popup__input block-data-date-elems-popup__input_date">                <div class="block-data-date-elems-popup__time-title">Время</div>                <input placeholder="ЧЧ : ММ" type="text"                  class="block-data-date-elems-popup__input block-data-date-elems-popup__input_time">                <p class="block-data-date-elems-popup__info">Специалист предварительно свяжется с Вами, чтобы                  подтвердить дату и время</p>              </div>            </div>          </div>        </div>        <div class="elems-popup__bottom">          <div class="elems-popup__but-bottom but">            <div class="elems-popup__but-bottom-text but-text">Записаться</div>          </div>        </div>      </div>    </div>  </div></div>  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --><!--<script src="js/vendors.min.js"></script>--><script src="js/app.js"></script></body></html>