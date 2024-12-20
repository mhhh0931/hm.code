document.addEventListener('DOMContentLoaded', function () {new Splide(".splide",{
    type:"loop",
    perPage:3,
    gap:48,
    pagenation:true,
    speed: 1000, 
    focus  : "center",
    updateOnMove: true,
    fixedWidth: '33%', // スライドの幅を固定
    fixedHeight: 300, // スライドの高さを固定 
  
    classes: {
      pagination: "splide__pagination your-class-pagination",
      page: "splide__pagination__page your-class-page",
    },
  
    breakpoints: {
      780: {
        perPage: 1,
        fixedWidth: '80%', // モバイル時の幅
        fixedHeight: 240, // モバイル時の高さ
      },
    },
    
  }).mount();
});
  
  // スムーススクロール
  //href属性の「#」で始まるリンクを全て取得
  const links = document.querySelectorAll('a[href^="#"]');
  //取得したリンクを1つずつ処理を実行する
  links.forEach((link) =>{
  　//リンクをクリックしたら処理を実行する
    link.addEventListener('click', (e) => {
  　　//リンクイベントをキャンセルする
      e.preventDefault();
      //クリックしたリンクのhref属性を取得
      const href = link.getAttribute('href');
  　　//目的のセクションを取得
      const targetSection = document.querySelector(href);
      //画面の上からセクションのtop位置までの垂直方向の距離
      const sectionTop = targetSection.getBoundingClientRect().top;
  　　//現在位置を取得
      const currentPos = window.scrollY;
  　　//ヘッダーの高さ
      const gap = 80;
      //現在位置から目的のsectionまでのスクロール量
      const target = sectionTop + currentPos - gap;
  　　//特定の位置までスクロールさせる
      window.scrollTo({
        top: target,　　　　　//目的の位置のY座標を指定
        behavior: 'smooth',　//スクロールの動きを指定
      });
    });
  });
  
  
  // スクロールフェードイン
  document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        var elements = document.querySelectorAll('.service__item');
        elements.forEach(function(element) {
            var pos = element.offsetTop;
            var scroll = window.scrollY;
            var windowHeight = window.innerHeight;
            if (scroll > pos - windowHeight) {
                element.classList.add('scrolled');
            }
        });
    });
  });
  
  // ハンバーガーメニュー
    const hamburger = document.querySelector('.hamburger');
    const span = document.querySelectorAll('.hamburger__item');
    const nav = document.querySelector(".hamburger__navigation");
  
  
    hamburger.addEventListener('click', function () {
        hamburger.classList.toggle("open");
        // nav.classList.toggle("add");
  
        if (nav.style.display === 'none' || nav.style.display === '') {
          // 厳密等価演算子（===）→値だけではなく、型まで含めて一致したときに「同じだよ～」な結果を返す
  
          nav.style.display = 'block';
          nav.style.opacity = 0; // 初期透明度を0に設定
          var fadeEffect = setInterval(function() {
              if (nav.style.opacity < 1) {
                  nav.style.opacity = parseFloat(nav.style.opacity) + 0.1; // 透明度を徐々に上げる
              } else {
                  clearInterval(fadeEffect); // 完全に表示されたらインターバルをクリア
              }
          }, 1); // ミリ秒ごとに透明度を更新
      } else {
          var fadeOutEffect = setInterval(function() {
              if (nav.style.opacity > 0) {
                  nav.style.opacity = parseFloat(nav.style.opacity) - 0.1; // 透明度を徐々に下げる
              } else {
                  nav.style.display = 'none'; // 完全に非表示になったらdisplayをnoneに
                  clearInterval(fadeOutEffect); // インターバルをクリア
              }
          }, 1); //ミリ秒ごとに透明度を更新
      }
  
  });
  
   
     // fadein

     window.addEventListener('scroll', function(){
        // スクロール量を取得
        const scroll = window.scrollY;
        // 画面の高さを取得
        const windowHeight = window.innerHeight;
        // すべての要素を取得
        const boxes = document.querySelectorAll('.flow__list');
      
        boxes.forEach(function(box) {
          // boxまでの高さを取得
          const distanceToBox = box.offsetTop;
          // 下記条件が成り立つときだけboxにis-activeクラスを付与する
          if(scroll + windowHeight > distanceToBox) {
            box.classList.add('is-active');
          }
        });
      });
  
   