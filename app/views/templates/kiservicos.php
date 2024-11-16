<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<div class=">
    <div class="of-height-200"></div>
    <section class="kiServicos">
        <div class="site">
            <div class="kiServico-header">
                <h1>Serviços</h1>
                <div class="kiServico-titulo">
                    <p>Home/</p>
                    <p>Serviços</p>
                </div>
                <div class="kiservicos-border">
                </div>
            </div>
            <div class="of-height-70"></div>

            <div class="kiServico-container">
                <?php foreach ($servicos as $servico): ?>
                    <div class="kiServico-conteudo">
                        <div class="kiServico-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47" fill="none">
                                <path
                                    d="M19.5293 25.4204H26.7225V19.6704H11.6834L13.8627 14.7916C14.0912 14.2626 14.6102 13.9204 15.1852 13.9204H24.0545C23.7771 12.4671 23.7728 11.0914 24.0603 9.60793H15.1852C12.8823 9.60793 10.808 10.9764 9.90092 13.0924L6.78442 20.3662C4.96886 21.3336 3.7168 23.2239 3.7168 25.4204V28.2954C3.7168 30.4143 4.88117 32.2486 6.5918 33.2462V38.3579C6.5918 39.9435 7.88123 41.2329 9.4668 41.2329H13.7793C15.3649 41.2329 16.6543 39.9435 16.6543 38.3579V34.0454H26.7225V28.2954H19.5293C18.7358 28.2954 18.0918 27.6514 18.0918 26.8579C18.0918 26.0644 18.7358 25.4204 19.5293 25.4204ZM11.623 30.4517C9.63786 30.4517 8.0293 28.8431 8.0293 26.8579C8.0293 24.8727 9.63786 23.2642 11.623 23.2642C13.6082 23.2642 15.2168 24.8727 15.2168 26.8579C15.2168 28.8431 13.6082 30.4517 11.623 30.4517Z"
                                    fill="white" />
                                <path
                                    d="M43.8548 10.2936C43.2612 6.89105 40.4063 4.45737 38.7704 3.96143C38.4944 3.87805 38.2227 4.09655 38.2227 4.38405V11.596C38.2227 12.1408 37.9151 12.6382 37.4278 12.8811L35.9903 13.5999C35.5849 13.8026 35.1091 13.8026 34.7051 13.5999L33.2676 12.8811C32.7803 12.6382 32.4727 12.1394 32.4727 11.596V4.38405C32.4727 4.09512 32.1996 3.87662 31.9221 3.96143C30.2848 4.46887 27.4314 6.93993 26.842 10.3137C26.336 13.2117 27.4228 16.0537 29.1377 17.7701C29.4195 18.0518 29.5963 18.4155 29.5963 18.8137V38.3594C29.5963 41.5334 32.1694 44.1065 35.3434 44.1065C38.5174 44.1065 41.0905 41.5334 41.0905 38.3594L41.0948 18.8209C41.0948 18.4184 41.2774 18.0475 41.562 17.7614C43.2885 16.0364 44.3594 13.1816 43.8548 10.2936ZM35.3549 40.5142C34.1646 40.5142 33.1986 39.5482 33.1986 38.3579C33.1986 37.1677 34.1646 36.2017 35.3549 36.2017C36.5452 36.2017 37.5112 37.1677 37.5112 38.3579C37.5112 39.5482 36.5452 40.5142 35.3549 40.5142Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="kiServico-desc">
                            <a href="#" class="title"><?php echo htmlspecialchars($servico['nome_servico'], ENT_QUOTES, 'UTF-8'); ?></a>
                            <p><?php echo htmlspecialchars($servico['descricao_servico'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <a href="#">Veja Mais</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </section>
</head>

<body>

</body>

</html>