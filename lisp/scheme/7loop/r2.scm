(define (my-reverse ls)
  (my-reverse-rec ls ()))

(define (my-reverse-rec ls0 ls1)
  (if (null? ls0)
    ls1
    (my-reverse-rec (cdr ls0) (cons (car ls0) ls1))))


(define (my-sum-tail ls)
  (my-sum-rec ls 0))

(define (my-sum-rec ls n)
  (if (null? ls)
      n
      (my-sum-rec (cdr ls) (+ n (car ls)))))

(define (my-string->integer str)
  (c2i (string->list str) 0))


(define (c2i ls n)
  (if (null? ls)
    n
    (c2i (cdr ls)
    (+ (- (char->integer (car ls)) 48)
      (* n 10)))))
