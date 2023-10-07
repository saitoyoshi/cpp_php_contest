(define (evaluate s)
  (cond
    ((>= s 80) "A")
    ((<= 60 s 79) "B")
    ((<= 40 s 59) "C")
    (else "D")))
