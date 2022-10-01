// alert("hello, world!");
function toggleDropDownBoxUsername(){
    let usernameBtn = document.querySelector('.dropdown-box-username');
    let dropdownBoxDropdown = document.querySelector('.dropdown');
    
    usernameBtn.classList.toggle('dropdown-box-username-active');
    dropdownBoxDropdown.classList.toggle('dropdown-active');
}
function toggleDropDownWithdraw(){
    let dropdownWithdraw = document.querySelector('.dropdown-withdraw');

    dropdownWithdraw.classList.toggle('active');
}
function mobileSideMenu(){
    let mobileSideMenu = document.querySelector('.side-menu');

    mobileSideMenu.classList.toggle('side-menu-active');
}
function mobileNotificationDropdown(){
    let mobileSideMenu = document.querySelector('.mobile-view-dropdown');

    let mobileNotificationSpan1 = document.querySelector('.mobile-notification-span1');
    let mobileNotificationSpan2 = document.querySelector('.mobile-notification-span2');

    let mobileNotificationSpanIcon1 = document.querySelector('.mobile-notification-span-icon1');
    let mobileNotificationSpanIcon2 = document.querySelector('.mobile-notification-span-icon2');

    mobileNotificationSpanIcon1.classList.toggle('active');
    mobileNotificationSpanIcon2.classList.toggle('active');

    mobileNotificationSpan1.classList.toggle('active');
    mobileNotificationSpan2.classList.toggle('active');
    
    mobileSideMenu.classList.toggle('active');
}
function popupDepositWrapper(){
    let popupDepositWrapper = document.querySelector('.popup-deposit-wrapper');

    popupDepositWrapper.classList.toggle('active');
}

function popupBankWithdrawal(){
    let popupDepositWrapper = document.querySelector('.popup-bank-withdrawal');

    popupDepositWrapper.classList.toggle('active');
}

function popupBitcoinWithdrawal(){
    let popupDepositWrapper = document.querySelector('.popup-bitcoin-withdrawal');

    popupDepositWrapper.classList.toggle('active');
}

function popupBitcoinCashWithdrawal(){
    let popupDepositWrapper = document.querySelector('.popup-bitcoin-cash-withdrawal');

    popupDepositWrapper.classList.toggle('active');
}
function popupDogeCoinWithdrawal(){
    let popupDepositWrapper = document.querySelector('.popup-doge-coin-withdrawal');

    popupDepositWrapper.classList.toggle('active');
}
function popupEthereumWithdrawal(){
    let popupDepositWrapper = document.querySelector('.popup-ethereum-withdrawal');

    popupDepositWrapper.classList.toggle('active');
}
function popupLiteCoinWithdrawal(){
    let popupDepositWrapper = document.querySelector('.popup-lite-coin-withdrawal');

    popupDepositWrapper.classList.toggle('active');
}
function popupUsdWithdrawal(){
    let popupDepositWrapper = document.querySelector('.popup-usd-withdrawal');

    popupDepositWrapper.classList.toggle('active');
}
function popupXrpWithdrawal(){
    let popupDepositWrapper = document.querySelector('.popup-xrp-withdrawal');

    popupDepositWrapper.classList.toggle('active');
}

function popupProfilePicture(){
    let popupDepositWrapper = document.querySelector('.popup-profile-picture');

    popupDepositWrapper.classList.toggle('active');
}
function popupProfileUpdate(){
    let popupDepositWrapper = document.querySelector('.popup-profile-update');

    popupDepositWrapper.classList.toggle('active');
}

function popupInvestNotification(){
    let popupDepositWrapper = document.querySelector('.invest-popup-notification');

    popupDepositWrapper.classList.toggle('active');
}

function userPopup(){
    let popupDepositWrapper = document.querySelector('.user-dropdown');

    popupDepositWrapper.classList.toggle('active');
}

function notificationPopup(){
    let popupDepositWrapper = document.querySelector('.notification-dropdown');

    popupDepositWrapper.classList.toggle('active');
}

// Accordion

// Deposit
function depositAccordion(){
    // Variables use for checking elements
    // Get Buttons
    let mainBox1 = document.querySelector('.box1');
    let mainBox2 = document.querySelector('.box2');
    let mainBox3 = document.querySelector('.box3');
    // Get Associated Boxes
    let tableBox1 = document.querySelector('.con1');
    let tableBox2 = document.querySelector('.con2');
    let tableBox3 = document.querySelector('.con3');

    // Variables use for toggling elements
    // Get Buttons
    let box1 = document.querySelector('#box1');
    let box2 = document.querySelector('#box2');
    let box3 = document.querySelector('#box3');
    // Get Associated Boxes
    let con1 = document.querySelector('.container-1');
    let con2 = document.querySelector('.container-2');
    let con3 = document.querySelector('.container-3');

    // Checking Buttons and determining conditions
    // For deposit buttons
    let checkDeposit = mainBox1.classList.contains('active');
    if(!checkDeposit){
        box1.classList.toggle('active');
    }
    // For invest buttons
    let checkInvest = mainBox2.classList.contains('active');
    if(checkInvest){
        box2.classList.toggle('active');
    }
    // For withdrawal buttons
    let checkWithdrawal = mainBox3.classList.contains('active');
    if(checkWithdrawal){
        box3.classList.toggle('active');
    }

    // Checking Boxes and determining conditions
    // For deposit box
    let checkDepositBox = tableBox1.classList.contains('active');
    if(!checkDepositBox){
        con1.classList.toggle('active');
    }
    // For invest box
    let checkInvestBox = tableBox2.classList.contains('active');
    if(checkInvestBox){
        con2.classList.toggle('active');
    }
    // For withdrawal box
    let checkWithdrawalBox = tableBox3.classList.contains('active');
    if(checkWithdrawalBox){
        con3.classList.toggle('active');
    }
}

// Invest
function investAccordion(){
    // Variables use for checking elements
    // Get Buttons
    let mainBox1 = document.querySelector('.box1');
    let mainBox2 = document.querySelector('.box2');
    let mainBox3 = document.querySelector('.box3');
    // Get Associated Boxes
    let tableBox1 = document.querySelector('.con1');
    let tableBox2 = document.querySelector('.con2');
    let tableBox3 = document.querySelector('.con3');

    // Variables use for toggling elements
    // Get Buttons
    let box1 = document.querySelector('#box1');
    let box2 = document.querySelector('#box2');
    let box3 = document.querySelector('#box3');
    // Get Associated Boxes
    let con1 = document.querySelector('.container-1');
    let con2 = document.querySelector('.container-2');
    let con3 = document.querySelector('.container-3');

    // Checking Buttons and determining conditions
    // For deposit buttons
    let checkDeposit = mainBox1.classList.contains('active');
    if(checkDeposit){
        box1.classList.toggle('active');
    }
    // For invest buttons
    let checkInvest = mainBox2.classList.contains('active');
    if(!checkInvest){
        box2.classList.toggle('active');
    }
    // For withdrawal buttons
    let checkWithdrawal = mainBox3.classList.contains('active');
    if(checkWithdrawal){
        box3.classList.toggle('active');
    }

    // Checking Boxes and determining conditions
    // For deposit box
    let checkDepositBox = tableBox1.classList.contains('active');
    if(checkDepositBox){
        con1.classList.toggle('active');
    }
    // For invest box
    let checkInvestBox = tableBox2.classList.contains('active');
    if(!checkInvestBox){
        con2.classList.toggle('active');
    }
    // For withdrawal box
    let checkWithdrawalBox = tableBox3.classList.contains('active');
    if(checkWithdrawalBox){
        con3.classList.toggle('active');
    }
}

// Withdrawals
function withdrawalsAccordion(){
    // Variables use for checking elements
    // Get Buttons
    let mainBox1 = document.querySelector('.box1');
    let mainBox2 = document.querySelector('.box2');
    let mainBox3 = document.querySelector('.box3');
    // Get Associated Boxes
    let tableBox1 = document.querySelector('.con1');
    let tableBox2 = document.querySelector('.con2');
    let tableBox3 = document.querySelector('.con3');

    // Variables use for toggling elements
    // Get Buttons
    let box1 = document.querySelector('#box1');
    let box2 = document.querySelector('#box2');
    let box3 = document.querySelector('#box3');
    // Get Associated Boxes
    let con1 = document.querySelector('.container-1');
    let con2 = document.querySelector('.container-2');
    let con3 = document.querySelector('.container-3');

    // Checking Buttons and determining conditions
    // For deposit buttons
    let checkDeposit = mainBox1.classList.contains('active');
    if(checkDeposit){
        box1.classList.toggle('active');
    }
    // For invest buttons
    let checkInvest = mainBox2.classList.contains('active');
    if(checkInvest){
        box2.classList.toggle('active');
    }
    // For withdrawal buttons
    let checkWithdrawal = mainBox3.classList.contains('active');
    if(!checkWithdrawal){
        box3.classList.toggle('active');
    }

    // Checking Boxes and determining conditions
    // For deposit box
    let checkDepositBox = tableBox1.classList.contains('active');
    if(checkDepositBox){
        con1.classList.toggle('active');
    }
    // For invest box
    let checkInvestBox = tableBox2.classList.contains('active');
    if(checkInvestBox){
        con2.classList.toggle('active');
    }
    // For withdrawal box
    let checkWithdrawalBox = tableBox3.classList.contains('active');
    if(!checkWithdrawalBox){
        con3.classList.toggle('active');
    }
}



