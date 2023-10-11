(defparameter *nodes* '((living-room (you are in the living-room. a wizard is snoring loudly on the couch.))
(garden (you are in a beautiful garden. there is a well in fron of you.))
(attic (you are in the attic. there is a giant welding orch in the corner.))))

(defun describe-location (location nodes)
  (cadr (assoc location nodes)))

(defparameter *edges* '((living-room (garden west door)
                        (attic upstairs ladder))
                        (garden (living-room east door))
                        (attic (living-room downstairs ladder))))
(defun describe-path (edge)
  `(there is a ,(caddr edge) going ,(cadr edge) from here.))

(defun describe-paths (locaton edges)
  (apply #'append (mapcar #'describe-path (cdr (assoc locaton edges)))))
