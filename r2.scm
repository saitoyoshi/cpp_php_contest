(define pi (* 4 (atan 1.0)))

(define (deg2rad deg)
  (* (/ deg 180) pi))
(define (getdistance vx t)
  (* vx t))

(define (gettime vy)
  (/ (* 2.0 vy) 9.8))

(define (getThrownDistance v theta)
  (getdistance
    (* v (cos (deg2rad theta)))
    (gettime (* v (sin (deg2rad theta))))))
