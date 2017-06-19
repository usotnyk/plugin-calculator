
//Loan class constructor
var Loan = function Loan(amount, term) {
  this.amount = amount;
  this.term = term;
}

//LoanCalculator object with method to calculate payment
var LoanCalculator = {

  calculatePayments: function (loan, interest) {
    //console.log(loan);
    var discountFactor = this.getDiscountFactor(interest, loan.term)
    //can't divide by 0
    if (discountFactor != 0) {
      var result = loan.amount / discountFactor;
      //console.log(result);
      return result;
    } else {
      console.log("discount factor can't equal to 0!");
      return NaN
    }
  },
  // private function
  getDiscountFactor: function (interest, term) {
    console.log("calculating discountFactor");
    var i = interest/26;
    //console.log(i);
    var n = (26*term)/12;
    //console.log(n);
    var numerator = Math.pow((1 + i), n) - 1;
    //console.log(numerator);
    var demoninator = i * Math.pow((1 + i), n);
    //console.log(demoninator);
    var discountFactor = numerator/demoninator;
    //console.log(discountFactor);

    return discountFactor;
  }
}


// client application - new instance of loan and calculations with diffrent interests

//loan = new Loan(150000, 12)
//minimumPaymentAmount = LoanCalculator.calculatePayments(loan, 0.12)
//maximumPaymentAmount = LoanCalculator.calculatePayments(loan, 0.42);

function onInputChange() {
  console.log("slider-amount mouseup");
  var amountValue = $("#slider-amount").slider("value");
  var termValue = $("#slider-length").slider("value");
  console.log(amountValue);
  console.log(termValue);
  loan = new Loan(amountValue, termValue);
  minimumPaymentAmount = LoanCalculator.calculatePayments(loan, 0.0899)
  maximumPaymentAmount = LoanCalculator.calculatePayments(loan, 0.2999);
  console.log("minimum payment amount is " + minimumPaymentAmount);
  console.log("maximum payment amount is " + maximumPaymentAmount);
}

$("#slider-amount").mouseup(onInputChange);
  // console.log("slider-amount mouseup");
  // var amountValue = $("#slider-amount").slider("value");
  // var termValue = $("#slider-length").slider("value");
  // console.log(amountValue);
  // console.log(termValue);
  // loan = new Loan(amountValue, termValue);
  // minimumPaymentAmount = LoanCalculator.calculatePayments(loan, 0.0899)
  // maximumPaymentAmount = LoanCalculator.calculatePayments(loan, 0.2999);
  // console.log("minimum payment amount is " + minimumPaymentAmount);
  // console.log("maximum payment amount is " + maximumPaymentAmount);
// });

$("#slider-length").mouseup(onInputChange);
