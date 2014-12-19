// Define the tour!
var tour = {
   id: "welcome_tour",
   i18n: {
        nextBtn: "下一步",
        prevBtn: "返回",
        doneBtn: "完成",
      },
  steps: [
    {
      target: "centerPost",
      placement: "left",
      title: "找不到你很想要的東西或服務嗎？",
      content: "只要輸入標題、標籤、附上圖片，一分鐘內張貼你的需求",
      arrowOffset:"center",
      yOffset:"410",

      zindex:5,
    },
    {
      target: "searchBtn",
      arrowOffset:"center",
      placement: "right",
      title: "東西賣不掉？閒閒沒事做？",
      content: "快速搜尋有哪些需求你可以滿足？",
      zindex:5,
      fixedElement:true,
    },
    {
      target: "homeBtn",
      placement: "left",
      title: "首頁",
      content: "按這裡你可以回到首頁",
      yOffset:"center",
      zindex:5,
      fixedElement:true
    },
    {
      target: "k2ModuleBox91",
      placement: "left",
      title: "快來加入我們吧",
      arrowOffset:"center",
      xOffset:"-400",
      zindex:5,
      fixedElement:true,
      onShow: function() {
        $K2('#sm-trigger').toggleClass('active');
        $K2('#sm-trigger').toggleClass('arrow-close');
        $K2('#sm-trigger').toggleClass('arrow-open');
        $K2('#mastwrap').toggleClass('sliding-toright');
        $K2('#mastwrap').toggleClass('mastwrap-open');
        $K2('#sm').toggleClass('menu-open');
        $K2('#mastwrap').addClass('nav-opened');
      }
    }
  ],
  onEnd: function() {
    document.cookie="tour=1";      
  }
};


var tour2 = {
   id: "welcome_tour2",
   i18n: {
        nextBtn: "下一步",
        prevBtn: "返回",
        doneBtn: "完成",
      },
  steps: [
    {
      target: "notice_tab",
      placement: "left",
      title: "系統通知",
      content: "當你等級提升，或是需求有新報價、留言時，這裏都可以看到喔！",
      xOffset:"-300",
      zindex:21,
    },
    {
      target: "items_tab",
      placement: "top",
      title: "需求紀錄",
      content: "關於你張貼過的需求項目都在這裡",
      arrowOffset:"center",
      xOffset:"-100",
      zindex:21,
    },
    {
      target: "trans_tab",
      placement: "top",
      title: "交易紀錄",
      arrowOffset:"center",
      xOffset:"-100",
      content: "隨時追蹤你需求目前的交易狀況（例如已付款、出貨等等）",
      zindex:21,
    }
  ],
  bubbleWidth:"200",
  onEnd: function() {
    document.cookie="tour=2";      
  }
};
var cookie=getCookie("tour");
if(cookie==""){
  // Start the tour!
  hopscotch.startTour(tour);
}else if(cookie=="1"){
  // Start the tour!
  $K2(document).ready(function(){
    $K2('#sm-trigger').toggleClass('active');
    $K2('#sm-trigger').toggleClass('arrow-close');
    $K2('#sm-trigger').toggleClass('arrow-open');
    $K2('#mastwrap').toggleClass('sliding-toright');
    $K2('#mastwrap').toggleClass('mastwrap-open');
    $K2('#sm').toggleClass('menu-open');
    $K2('#mastwrap').addClass('nav-opened');
    hopscotch.startTour(tour2);

  });

    
  
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
    }
    return "";
}
