;1
(define (my-length ls)
  (if (null? ls)
    0
    (+ 1 (my-length (cdr ls)))))

;2
(define (my-sum ls)
  (if (null? ls)
    0
    (+ (car ls) (my-sum (cdr ls)))))
;3
(define (remove x ls)
  (if (null? ls)
    '()
    (let ((h (car ls)))
      ((if (eqv? x h)
        (lambda (y) y)
        (lambda (y) (cons h y)))
      (remove x (cdr ls))))))

;4
(define (position x ls)
  (position-aux x ls 0))

(define (position-aux x ls i)
  (cond
    ((null? ls) #f)
    ((eqv? x (car ls)) i)
    (else (position-aux x (cdr ls) (inc i)))))
