// Generated by CoffeeScript 1.6.1
(function() {
  var beta, computeP, factorial;

  factorial = function(n) {
    if (n < 1) {
      return 1;
    } else {
      return n * factorial(n - 1);
    }
  };

  beta = function(x, y) {
    return (factorial(x - 1) * factorial(y - 1)) / factorial(x + y - 1);
  };

  computeP = function(x, nf, df) {
    var t1, t2, t3;
    t1 = 1 / beta(nf / 2, df / 2);
    t2 = Math.pow((nf * x) / (nf * x + df), nf / 2);
    t3 = Math.pow(1 - (nf * x) / (nf * x + df), df / 2);
    return t1 * t2 * t3 * (1 / x);
  };

}).call(this);