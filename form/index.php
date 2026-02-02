<div class="container">

                    <!-- content содержит содержимое формы -->
                    <div class="content">

                            <!-- Правая колонка: сама форма -->
                            <div class="right-side">

                            <!-- Заголовок для формы -->
                            <div class="topic-text"><h4>Оставьте заявку и с вами обязательно свяжутся!</h4></div>

                            <!-- Форма обратной связи -->
                            <form action="send.php">

                            <!-- Каждый input для выравнивания вкладываем в блок input-box -->
                            <div class="input-box">
                                <input type="text" name="name" placeholder="Введите ФИО"  required />
                            </div>
                            <div class="input-box">
                                <input type="email" name="email" placeholder="Введите электронный адрес" required />
                            </div>
                            <div class="input-box">
                                <input type="tel" name="tel" placeholder="Введите номер телефона" />
                            </div>
                            <div class="input-box message-box">
                                <textarea name="message" cols="40" rows="6" placeholder="Сообщение" required ></textarea>
                            </div>
                            <div class="button">
                                <input type="button" value="Отправить" />
                            </div>
                            </form>
                            </div>
                    </div>
            </div>