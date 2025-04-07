<!doctype html>
<html lang="ru" class = "scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?></title>

  <!-- favicon -->
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="/assets/favicon/apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="/assets/favicon/favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="/assets/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./favicon/site.webmanifest" />
  <link
    rel="mask-icon"
    href="/assets/favicon/safari-pinned-tab.svg"
    color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#00aba9" />
  <meta name="theme-color" content="#ffffff" />

  <!-- Шрифты -->
  <link
    href="https://fonts.googleapis.com/css?family=Lobster:regular"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=M+PLUS+Rounded+1c&family=Pacifico&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />

  <!-- Стили -->
  <!-- BOOTSTRAP -->
  <!-- <link
    rel="stylesheet"
    href="https://gcore.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" /> -->
  <!-- <link href="https://gcore.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  <!-- MAIN STYLE -->
  <link rel="stylesheet" href="/assets/css/tailwind/output.css">
  <link rel="stylesheet" href="/assets/css/app.css">

</head>

<body>
  <div class="min-h-screen relative bg-main">

    <header class="p-3 header" id="home">
      <nav
        class="shadow-lg rounded-lg px-5 position-fixed translate-middle start-50 mx-auto nav navbar navbar-expand-lg">
        <!-- burger button -->
        <div class="nav__button-mobile--wrapper">
          <button class="nav__button-mobile" id="button-mobile"></button>
        </div>
        <?php $view->header(); ?>
      </nav>
    </header>

    <main class="" id="main">
      <?= $content ?>

      <footer
        id="footer"
        class="py-12 bg-[#12070f]"
        class="footer">
        <div class="container mx-auto w-full px-2">
          <div class="">
            <h2 class="mb-12 text-3xl text-center text-[#f5e5c4]">
              Свяжитесь со мной
            </h2>
          </div>
          <div class="text-center">
            <div
              class="col flex justify-evenly content-center">
              <a href="https://vk.com/crrazyman" target="_blank">
                <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg
                  width="60px"
                  height="60px"
                  viewBox="0 0 24 24"
                  fill="#f5e5c4"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="#f5e5c4"
                    d="M3.39994 3.4L3.04469 3.0481L3.0489 3.04395L3.39994 3.4ZM3.39994 20.6L3.04804 20.9552L3.04389 20.951L3.39994 20.6ZM20.5999 20.6L20.9552 20.9519L20.951 20.9561L20.5999 20.6ZM20.5999 3.4L20.9518 3.04475L20.956 3.04896L20.5999 3.4ZM5.37327 8.08667L4.87337 8.09692C4.87062 7.96256 4.92206 7.83275 5.01611 7.73676C5.11016 7.64076 5.23888 7.58667 5.37327 7.58667V8.08667ZM12.9066 16.4067H13.4066C13.4066 16.6828 13.1827 16.9067 12.9066 16.9067V16.4067ZM12.9066 13.4333H12.4066C12.4066 13.2921 12.4663 13.1575 12.571 13.0627C12.6757 12.9679 12.8156 12.9218 12.9562 12.9358L12.9066 13.4333ZM16.3533 16.4067V16.9067C16.1359 16.9067 15.9435 16.7663 15.8772 16.5593L16.3533 16.4067ZM18.7199 16.4067L19.2026 16.2762C19.2432 16.4264 19.2116 16.587 19.117 16.7106C19.0223 16.8342 18.8756 16.9067 18.7199 16.9067V16.4067ZM15.2999 12.2333L15.0771 12.681C14.9142 12.5998 14.8081 12.4365 14.8004 12.2546C14.7926 12.0727 14.8844 11.901 15.0399 11.8063L15.2999 12.2333ZM17.1928 10.461L17.6019 10.7486L17.1928 10.461ZM18.2199 8.08V7.58C18.3701 7.58 18.5123 7.6475 18.6073 7.76385C18.7023 7.88019 18.7399 8.03306 18.7098 8.18019L18.2199 8.08ZM16.0733 8.08L15.5921 7.94418C15.6529 7.72876 15.8494 7.58 16.0733 7.58V8.08ZM12.9066 11.3733L12.9596 11.8705C12.8186 11.8856 12.6778 11.84 12.5723 11.7452C12.4668 11.6503 12.4066 11.5152 12.4066 11.3733H12.9066ZM12.9066 8.08667V7.58667C13.1827 7.58667 13.4066 7.81053 13.4066 8.08667H12.9066ZM10.7533 8.08667H10.2533C10.2533 7.81053 10.4771 7.58667 10.7533 7.58667V8.08667ZM10.7533 13.8467H11.2533C11.2533 14.0006 11.1823 14.146 11.061 14.2408C10.9396 14.3355 10.7814 14.3691 10.632 14.3317L10.7533 13.8467ZM7.6666 8.08667V7.58667C7.939 7.58667 8.16127 7.80471 8.16651 8.07705L7.6666 8.08667ZM1.49994 11.6C1.49994 9.35073 1.49889 7.61455 1.67936 6.26617C1.86175 4.90342 2.23763 3.8629 3.04471 3.04813L3.75516 3.75187C3.16225 4.35043 2.83813 5.14658 2.67052 6.39883C2.50099 7.66545 2.49994 9.3226 2.49994 11.6H1.49994ZM1.49994 12.4V11.6H2.49994V12.4H1.49994ZM3.04389 20.951C2.23759 20.1332 1.86176 19.0917 1.67936 17.7288C1.49889 16.3805 1.49994 14.646 1.49994 12.4H2.49994C2.49994 14.674 2.50099 16.3295 2.67052 17.5962C2.83811 18.8483 3.16229 19.6468 3.75599 20.249L3.04389 20.951ZM11.5999 22.5C9.35067 22.5 7.61449 22.5011 6.26611 22.3206C4.90335 22.1382 3.86284 21.7623 3.04807 20.9552L3.75181 20.2448C4.35037 20.8377 5.14652 21.1618 6.39877 21.3294C7.66539 21.4989 9.32254 21.5 11.5999 21.5V22.5ZM12.3999 22.5H11.5999V21.5H12.3999V22.5ZM20.951 20.9561C20.1332 21.7624 19.0916 22.1382 17.7288 22.3206C16.3804 22.5011 14.6459 22.5 12.3999 22.5V21.5C14.674 21.5 16.3295 21.4989 17.5961 21.3294C18.8483 21.1618 19.6467 20.8376 20.2489 20.2439L20.951 20.9561ZM22.4999 12.4C22.4999 14.6493 22.501 16.3855 22.3205 17.7338C22.1381 19.0966 21.7623 20.1371 20.9552 20.9519L20.2447 20.2481C20.8376 19.6496 21.1618 18.8534 21.3294 17.6012C21.4989 16.3345 21.4999 14.6774 21.4999 12.4H22.4999ZM22.4999 11.6V12.4H21.4999V11.6H22.4999ZM20.956 3.04896C21.7623 3.86678 22.1381 4.90834 22.3205 6.27117C22.501 7.61954 22.4999 9.35404 22.4999 11.6H21.4999C21.4999 9.32596 21.4989 7.67046 21.3294 6.40383C21.1618 5.15166 20.8376 4.35322 20.2439 3.75104L20.956 3.04896ZM12.3999 1.5C14.6492 1.5 16.3854 1.49895 17.7338 1.67942C19.0965 1.86181 20.137 2.23769 20.9518 3.04478L20.2481 3.75522C19.6495 3.16231 18.8534 2.83819 17.6011 2.67058C16.3345 2.50105 14.6773 2.5 12.3999 2.5V1.5ZM11.5999 1.5H12.3999V2.5H11.5999V1.5ZM3.0489 3.04395C3.86672 2.23765 4.90828 1.86183 6.27111 1.67942C7.61948 1.49895 9.35398 1.5 11.5999 1.5V2.5C9.3259 2.5 7.67039 2.50105 6.40377 2.67058C5.1516 2.83817 4.35316 3.16235 3.75098 3.75605L3.0489 3.04395ZM12.6399 16.9067C10.2377 16.9067 8.30046 16.0798 6.95797 14.5232C5.62543 12.9782 4.92825 10.7719 4.87337 8.09692L5.87317 8.07641C5.92496 10.6014 6.5811 12.5551 7.71523 13.8701C8.83941 15.1735 10.4822 15.9067 12.6399 15.9067V16.9067ZM12.6466 16.9067H12.6399V15.9067H12.6466V16.9067ZM12.9066 16.9067H12.6466V15.9067H12.9066V16.9067ZM13.4066 13.4333V16.4067H12.4066V13.4333H13.4066ZM15.8772 16.5593C15.4192 15.1312 14.2955 14.0741 12.857 13.9309L12.9562 12.9358C14.8643 13.1259 16.274 14.5221 16.8294 16.254L15.8772 16.5593ZM18.7199 16.9067H16.3533V15.9067H18.7199V16.9067ZM17.8441 13.6364C18.4784 14.4104 18.9414 15.3101 19.2026 16.2762L18.2373 16.5372C18.013 15.7076 17.6154 14.9349 17.0706 14.2703L17.8441 13.6364ZM15.5227 11.7857C16.4186 12.2316 17.2098 12.8624 17.8441 13.6364L17.0706 14.2703C16.5259 13.6056 15.8465 13.0639 15.0771 12.681L15.5227 11.7857ZM17.6019 10.7486C17.0599 11.5195 16.3648 12.1703 15.56 12.6604L15.0399 11.8063C15.7273 11.3877 16.3209 10.8318 16.7838 10.1735L17.6019 10.7486ZM18.7098 8.18019C18.521 9.10338 18.1438 9.97773 17.6019 10.7486L16.7838 10.1735C17.2467 9.51507 17.5688 8.76831 17.7301 7.97982L18.7098 8.18019ZM16.0733 7.58H18.2199V8.58H16.0733V7.58ZM12.8536 10.8762C13.3501 10.8232 13.9226 10.4996 14.4449 9.94981C14.9606 9.40692 15.3817 8.68939 15.5921 7.94418L16.5545 8.21582C16.2981 9.12394 15.7926 9.98308 15.17 10.6385C14.5539 11.287 13.7765 11.7834 12.9596 11.8705L12.8536 10.8762ZM13.4066 8.08667V11.3733H12.4066V8.08667H13.4066ZM10.7533 7.58667H12.9066V8.58667H10.7533V7.58667ZM10.2533 13.8467V8.08667H11.2533V13.8467H10.2533ZM8.16651 8.07705C8.23719 11.7526 9.83535 13.1018 10.8745 13.3616L10.632 14.3317C9.00453 13.9249 7.24268 12.0474 7.1667 8.09628L8.16651 8.07705ZM5.37327 7.58667H7.6666V8.58667H5.37327V7.58667Z"
                    fill="#000000" />
                </svg>
              </a>
              <a href="https://t.me/Mari11ion" target="_blank"><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="60"
                  height="60"
                  fill="#f5e5c4"
                  class="bi bi-telegram"
                  viewBox="0 0 16 16">
                  <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                </svg></a>
              <a
                href="https://www.instagram.com/maril1ion?igsh=MTd3cms0dHRocHQ2Mg%3D%3D&utm_source=qr"
                target="_blank"><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="60"
                  height="60"
                  fill="#f5e5c4"
                  class="bi bi-instagram"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a>
            </div>
          </div>
<div class = "my-12 border border-solid border-[#f5e5c4]"></div>
          <div>
            <div
              class="flex justify-evenly content-center">
              <div>
                <span class="text-xl text-[#f5e5c4] font-medium" >Email:</span>
                <a
                  class="text-xl text-[#b11e4b] font-bold"
                  href="email:marillion_programmer@mail.ru">marillion_programmer@mail.ru</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </main>
  </div>
  <!-- GSAP -->
  <script src="https://gcore.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
  <script src="https://gcore.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="/assets/gsap/min/gsap.min.js"></script>
  <!-- MAIN SCRIPT -->

  <script src="/assets/js/app.js"></script>
  <script src="/assets/js/animations.js"></script>
  <script src="/assets/js/nav.js"></script>
</body>

</html>