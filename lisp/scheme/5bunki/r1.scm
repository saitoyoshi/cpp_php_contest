(define (abs num)
(* num
  (if (positive? num) 1 -1)))

(define (inverse n)
  (if (not (zero? n))
    (/ n)))
(define (i2a n)
  (if (<= 33 n 126)
    (integer->char n)))
