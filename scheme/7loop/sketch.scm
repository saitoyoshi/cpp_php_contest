(define (fact n)
  (if (= n 1)
      1
      (* n (fact (- n 1)))))

(define (list*2 ls)
  (if (null? ls)
    '()'
    (cons (* 2 (car ls))
          (list*2 (cdr ls)))))
(define (fact-tail n)
  (fact-rec n n))

(define (fact-rec n p)
  (if (= n 1)
    p
    (let ((m (- n 1)))
      (fact-rec m (* p m)))))
