//Initializing slider
jQuery(document).ready(function($) {
  //recalculate();
  animateBarsUp();
  for(key in wp_ranges) {
    wp_ranges[key] = parseInt(wp_ranges[key]);
  }

  //Initializing slider
  $("#slider-amount").slider({
    range: "min",
    value: 75000,
    min: wp_ranges.loanAmountMin,
    max: wp_ranges.loanAmountMax,
    step: 1000,
    slide: function(event, ui) {
      $("#amount").val("$" + ui.value.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
      recalculate();
    },
    stop: animateBars
  });
  $("#amount").val("$" + $("#slider-amount").slider("value").toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  $("#slider-term").slider({
    range: "min",
    value: 12,
    min: wp_ranges.loanTermMin,
    max: wp_ranges.loanTermMax,
    step: 3,
    slide: function(event, ui) {
      $("#term").val(ui.value + " months");
      recalculate();
    },
    stop: animateBars
  });
  $("#term").val($("#slider-term").slider("value") + " months");

  //Chart animations

  function animateBarsUp() {
    $('.outer-bar-1').delay(100).animate({'height': '40%'},800);
    $('.outer-bar-1').delay(100).animate({'height': '40%'},800);
    $('.outer-bar-2').delay(200).animate({'height': '70%'},800);
    $('.outer-bar-3').delay(300).animate({'height': '100%'},800);
    $('.hidden').delay(500).animate({'opacity': '1'},800);
    $('.lendified-price').delay(100).fadeIn(800);
    $('.comp-1-price').delay(200).fadeIn(800);
    $('.comp-2-price').delay(300).fadeIn(800);
  }

  function animateBars() {
    $('.lendified-price').fadeOut(200).delay(100).fadeIn(800);
    $('.comp-1-price').fadeOut(200).delay(200).fadeIn(800);
    $('.comp-2-price').fadeOut(200).delay(300).fadeIn(800);
    $('.hidden').animate({'opacity': '0'},0).delay(500).animate({'opacity': '1'},800);
    $('.outer-bar-1').animate({'height': '0%'},200).delay(100).animate({'height': '40%'},800);
    $('.outer-bar-2').animate({'height': '0%'},200).delay(200).animate({'height': '70%'},800);
    $('.outer-bar-3').animate({'height': '0%'},200).delay(300).animate({'height': '100%'},800);
  } 

});


  //Loan class constructor
  var Loan = function Loan(amount, term) {
    this.amount = amount;
    this.term = term;
  }
  //LoanCalculator object with method to calculate payment
  var LoanCalculator = {
    calculatePayments: function (loan, interest) {
      var discountFactor = this._getDiscountFactor(interest, loan.term)
      //can't divide by 0
      if (discountFactor != 0) {
        var result = loan.amount / discountFactor;
        return result;
      } else {
        console.log("discount factor can't equal to 0!");
        return NaN
      }
    },
    calculateInterestCost: function (loan, interest) {
      var biweeklyPayment = this.calculatePayments(loan, interest);
      var interestCost = biweeklyPayment * 26 *(loan.term/12) - loan.amount;
      return interestCost;
    },
    // private function
    _getDiscountFactor: function (interest, term) {
      var i = interest/(26*100);
      var n = (26*term)/12;
      var numerator = Math.pow((1 + i), n) - 1;
      var demoninator = i * Math.pow((1 + i), n);
      var discountFactor = numerator/demoninator;
      return discountFactor;
    }
  }
  // client application - new instance of loan and calculations with diffrent interests
  function recalculate() {
    var amountValue = jQuery("#slider-amount").slider("value");
    var termValue = jQuery("#slider-term").slider("value");
    var paymentInformation = getPaymentInformation(amountValue, termValue);
    //paymentInformation.inspect();
    displayPaymentInformation(paymentInformation);
  }
  //wp_rates object stores interest rates entered through admin
  function getPaymentInformation(amountValue, termValue) {
    var paymentInformation = {};
    var loan = new Loan(amountValue, termValue);
    paymentInformation.minimumPaymentAmount = LoanCalculator.calculatePayments(loan, wp_rates.interestMin);
    paymentInformation.maximumPaymentAmount = LoanCalculator.calculatePayments(loan, wp_rates.interestMax);
    //interest cost calculations
    paymentInformation.lendifiedInterestCost = LoanCalculator.calculateInterestCost(loan, wp_rates.landifiedInterest);
    paymentInformation.competitorOneInterestCost = LoanCalculator.calculateInterestCost(loan, wp_rates.competitorOneInterest);
    paymentInformation.competitorTwoInterestCost = LoanCalculator.calculateInterestCost(loan, wp_rates.competitorTwoInterest);
    paymentInformation.interestSavings = paymentInformation.competitorTwoInterestCost - paymentInformation.lendifiedInterestCost;

    paymentInformation.inspect = function() {
      console.log(this);
    }
    return paymentInformation;
  }

  function displayPaymentInformation(paymentInformation) {
    var minimumPaymentContainer = document.getElementById("minimum-payment");
    minimumPaymentContainer.innerHTML = formatCurrency(paymentInformation.minimumPaymentAmount);
    var maximumaymentContainer = document.getElementById("maximum-payment");
    maximumaymentContainer.innerHTML = formatCurrency(paymentInformation.maximumPaymentAmount);
    var savingsContainer = document.getElementById("amount-saved");
    savingsContainer.innerHTML = formatCurrency(paymentInformation.interestSavings);
  }

  function formatCurrency(amount) {
    var symbol = "$";
    var formattedAmount = Math.round(amount).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    return symbol + formattedAmount;
  } 
