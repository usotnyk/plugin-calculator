
//Loan class constructor
var Loan = function Loan(amount, term) {
  this.amount = amount;
  this.term = term;
}

//LoanCalculator object with method to calculate payment
var LoanCalculator = {

  calculatePayments: function (loan, interest) {
    var discountFactor = this.getDiscountFactor(interest, loan.term)
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
  getDiscountFactor: function (interest, term) {
    var i = interest/26;
    var n = (26*term)/12;
    var numerator = Math.pow((1 + i), n) - 1;
    var demoninator = i * Math.pow((1 + i), n);
    var discountFactor = numerator/demoninator;

    return discountFactor;
  }
}

// client application - new instance of loan and calculations with diffrent interests

function recalculate() {
  var amountValue = $("#slider-amount").slider("value");
  var termValue = $("#slider-length").slider("value");

  var paymentInformation = getPaymentInformation(amountValue, termValue);
  paymentInformation.inspect();
  displayPaymentInformation(paymentInformation);
}

function getPaymentInformation(amountValue, termValue) {
  var paymentInformation = {};

  var loan = new Loan(amountValue, termValue);
  console.log(loan);
  paymentInformation.minimumPaymentAmount = LoanCalculator.calculatePayments(loan, 0.0899);
  paymentInformation.maximumPaymentAmount = LoanCalculator.calculatePayments(loan, 0.2999);
  //interest cost calculations
  paymentInformation.lendifiedInterestCost = LoanCalculator.calculateInterestCost(loan, 0.2);
  paymentInformation.onlineLenderInterestCost = LoanCalculator.calculateInterestCost(loan, 0.3);
  paymentInformation.merchantAdvenceInterestCost = LoanCalculator.calculateInterestCost(loan, 0.45);
  paymentInformation.interestSavings = paymentInformation.merchantAdvenceInterestCost - paymentInformation.lendifiedInterestCost;
  
  paymentInformation.inspect = function() {
    console.log(this.minimumPaymentAmount);
    console.log(this.maximumPaymentAmount);
    console.log(this.lendifiedInterestCost);
    console.log(this.onlineLenderInterestCost);
    console.log(this.merchantAdvenceInterestCost);
    console.log(this.interestSavings);

  }

  return paymentInformation;
}

function displayPaymentInformation(paymentInformation) {
 
  var minimumPaymentContainer = document.getElementById("minimum-payment");
  minimumPaymentContainer.innerHTML = Math.round(paymentInformation.minimumPaymentAmount);
  var maximumaymentContainer = document.getElementById("maximum-payment");
  maximumaymentContainer.innerHTML = Math.round(paymentInformation.maximumPaymentAmount);
}

$(document).ready(recalculate);
$("#slider-amount").mouseup(recalculate);
$("#slider-length").mouseup(recalculate);

competitor_one_interest
comp_one_interest


