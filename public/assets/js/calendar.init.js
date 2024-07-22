document.addEventListener("DOMContentLoaded", function () {
    var n = new bootstrap.Modal(document.getElementById("event-modal"), {
            keyboard: !1,
        }),
        t =
            (document.getElementById("event-modal"),
            document.getElementById("modal-title")),
        a = document.getElementById("form-event"),
        l = null,
        d = null,
        i = document.getElementsByClassName("needs-validation"),
        d = null,
        e = new Date(),
        s = e.getDate(),
        o = e.getMonth(),
        e = e.getFullYear(),
        s =
            (new FullCalendar.Draggable(
                document.getElementById("external-events"),
                {
                    itemSelector: ".external-event",
                    eventData: function (e) {
                        return {
                            title: e.innerText,
                            start: new Date(),
                            className: e.getAttribute("data-class"),
                        };
                    },
                }
            ),
            [
                {
                    title: "All Day Event",
                    start: new Date(e, o, 1),
                    className: "bg-primary",
                },
                {
                    title: "Long Event",
                    start: new Date(e, o, s - 5),
                    end: new Date(e, o, s - 2),
                    className: "bg-warning",
                },
                {
                    id: 999,
                    title: "Repeating Event",
                    start: new Date(e, o, s - 3, 16, 0),
                    allDay: !1,
                    className: "bg-info",
                },
                {
                    id: 999,
                    title: "Repeating Event",
                    start: new Date(e, o, s + 4, 16, 0),
                    allDay: !1,
                    className: "bg-primary",
                },
                {
                    title: "Meeting",
                    start: new Date(e, o, s, 10, 30),
                    allDay: !1,
                    className: "bg-success",
                },
                {
                    title: "Lunch",
                    start: new Date(e, o, s, 12, 0),
                    end: new Date(e, o, s, 14, 0),
                    allDay: !1,
                    className: "bg-danger",
                },
                {
                    title: "Birthday Party",
                    start: new Date(e, o, s + 1, 19, 0),
                    end: new Date(e, o, s + 1, 22, 30),
                    allDay: !1,
                    className: "bg-success",
                },
                {
                    title: "Click for Google",
                    start: new Date(e, o, 28),
                    end: new Date(e, o, 29),
                    url: "http://google.com/",
                    className: "bg-dark",
                },
            ]),
        e =
            (document.getElementById("external-events"),
            document.getElementById("calendar"));
    function r(e) {
        n.show(),
            a.classList.remove("was-validated"),
            a.reset(),
            (l = null),
            (t.innerText = "Add Event"),
            (d = e);
    }
    function c() {
        return 768 <= window.innerWidth && window.innerWidth < 1200
            ? "timeGridWeek"
            : window.innerWidth <= 768
            ? "listMonth"
            : "dayGridMonth";
    }
    var m = new FullCalendar.Calendar(e, {
        timeZone: "local",
        editable: !0,
        droppable: !0,
        selectable: !0,
        initialView: c(),
        themeSystem: "bootstrap",
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
        },
        windowResize: function (e) {
            var t = c();
            m.changeView(t);
        },
        eventDidMount: function (e) {
            "done" === e.event.extendedProps.status &&
                ((e.el.style.backgroundColor = "red"),
                (e = e.el.getElementsByClassName("fc-event-dot")[0]) &&
                    (e.style.backgroundColor = "white"));
        },
        eventClick: function (e) {
            n.show(),
                a.reset(),
                (document.getElementById("event-title").value[0] = ""),
                (l = e.event),
                (document.getElementById("event-title").value = l.title),
                (document.getElementById("event-category").value =
                    l.classNames[0]),
                (d = null),
                (t.innerText = "Edit Event"),
                (d = null);
        },
        dateClick: function (e) {
            r(e);
        },
        events: s,
    });
    m.render(),
        a.addEventListener("submit", function (e) {
            e.preventDefault();
            var e = document.getElementById("event-title").value,
                t = document.getElementById("event-category").value;
            !1 === i[0].checkValidity()
                ? i[0].classList.add("was-validated")
                : (l
                      ? (l.setProp("title", e), l.setProp("classNames", [t]))
                      : ((e = {
                            title: e,
                            start: d.date,
                            allDay: d.allDay,
                            className: t,
                        }),
                        m.addEvent(e)),
                  n.hide());
        }),
        document
            .getElementById("btn-delete-event")
            .addEventListener("click", function (e) {
              var modal = document.getElementById('event-modal');
              var bootstrapModal = new bootstrap.Modal(modal);
                l && (l.remove());
                bootstrapModal.hide()
            }),
        document
            .getElementById("btn-new-event")
            .addEventListener("click", function (e) {
                r({ date: new Date(), allDay: !0 });
            });
});
