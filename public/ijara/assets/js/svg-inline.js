function t(t, e) {
    return e || (e = t.slice(0)), Object.freeze(Object.defineProperties(t, {
        raw: {
            value: Object.freeze(e)
        }
    }))
}
const e = new WeakMap,
    s = t => "function" == typeof t && e.has(t),
    n = void 0 !== window.customElements && void 0 !== window.customElements.polyfillWrapFlushCallback,
    i = function(t, e) {
        let s = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
        for (; e !== s;) {
            const s = e.nextSibling;
            t.removeChild(e), e = s
        }
    },
    r = {},
    o = {},
    a = "{{lit-".concat(String(Math.random()).slice(2), "}}"),
    l = "\x3c!--".concat(a, "--\x3e"),
    c = new RegExp("".concat(a, "|").concat(l)),
    h = "$lit$";
class d {
    constructor(t, e) {
        this.parts = [], this.element = e;
        const s = [],
            n = [],
            i = document.createTreeWalker(e.content, 133, null, !1);
        let r = 0,
            o = -1,
            l = 0;
        const d = t.strings,
            u = t.values.length;
        for (; l < u;) {
            const t = i.nextNode();
            if (null !== t) {
                if (o++, 1 === t.nodeType) {
                    if (t.hasAttributes()) {
                        const e = t.attributes,
                            s = e.length;
                        let n = 0;
                        for (let t = 0; t < s; t++) p(e[t].name, h) && n++;
                        for (; n-- > 0;) {
                            const e = d[l],
                                s = _.exec(e)[2],
                                n = s.toLowerCase() + h,
                                i = t.getAttribute(n);
                            t.removeAttribute(n);
                            const r = i.split(c);
                            this.parts.push({
                                type: "attribute",
                                index: o,
                                name: s,
                                strings: r
                            }), l += r.length - 1
                        }
                    }
                    "TEMPLATE" === t.tagName && (n.push(t), i.currentNode = t.content)
                } else if (3 === t.nodeType) {
                    const e = t.data;
                    if (e.indexOf(a) >= 0) {
                        const n = t.parentNode,
                            i = e.split(c),
                            r = i.length - 1;
                        for (let e = 0; e < r; e++) {
                            let s, r = i[e];
                            if ("" === r) s = m();
                            else {
                                const t = _.exec(r);
                                null !== t && p(t[2], h) && (r = r.slice(0, t.index) + t[1] + t[2].slice(0, -h.length) + t[3]), s = document.createTextNode(r)
                            }
                            n.insertBefore(s, t), this.parts.push({
                                type: "node",
                                index: ++o
                            })
                        }
                        "" === i[r] ? (n.insertBefore(m(), t), s.push(t)) : t.data = i[r], l += r
                    }
                } else if (8 === t.nodeType)
                    if (t.data === a) {
                        const e = t.parentNode;
                        null !== t.previousSibling && o !== r || (o++, e.insertBefore(m(), t)), r = o, this.parts.push({
                            type: "node",
                            index: o
                        }), null === t.nextSibling ? t.data = "" : (s.push(t), o--), l++
                    } else {
                        let e = -1;
                        for (; - 1 !== (e = t.data.indexOf(a, e + 1));) this.parts.push({
                            type: "node",
                            index: -1
                        }), l++
                    }
            } else i.currentNode = n.pop()
        }
        for (const t of s) t.parentNode.removeChild(t)
    }
}
const p = (t, e) => {
        const s = t.length - e.length;
        return s >= 0 && t.slice(s) === e
    },
    u = t => -1 !== t.index,
    m = () => document.createComment(""),
    _ = /([ \x09\x0a\x0c\x0d])([^\0-\x1F\x7F-\x9F "'>=\/]+)([ \x09\x0a\x0c\x0d]*=[ \x09\x0a\x0c\x0d]*(?:[^ \x09\x0a\x0c\x0d"'`<>=]*|"[^"]*|'[^']*))$/;
class f {
    constructor(t, e, s) {
        this.__parts = [], this.template = t, this.processor = e, this.options = s
    }
    update(t) {
        let e = 0;
        for (const s of this.__parts) void 0 !== s && s.setValue(t[e]), e++;
        for (const t of this.__parts) void 0 !== t && t.commit()
    }
    _clone() {
        const t = n ? this.template.element.content.cloneNode(!0) : document.importNode(this.template.element.content, !0),
            e = [],
            s = this.template.parts,
            i = document.createTreeWalker(t, 133, null, !1);
        let r, o = 0,
            a = 0,
            l = i.nextNode();
        for (; o < s.length;)
            if (r = s[o], u(r)) {
                for (; a < r.index;) a++, "TEMPLATE" === l.nodeName && (e.push(l), i.currentNode = l.content), null === (l = i.nextNode()) && (i.currentNode = e.pop(), l = i.nextNode());
                if ("node" === r.type) {
                    const t = this.processor.handleTextExpression(this.options);
                    t.insertAfterNode(l.previousSibling), this.__parts.push(t)
                } else this.__parts.push(...this.processor.handleAttributeExpressions(l, r.name, r.strings, this.options));
                o++
            } else this.__parts.push(void 0), o++;
        return n && (document.adoptNode(t), customElements.upgrade(t)), t
    }
}
class g {
    constructor(t, e, s, n) {
        this.strings = t, this.values = e, this.type = s, this.processor = n
    }
    getHTML() {
        const t = this.strings.length - 1;
        let e = "",
            s = !1;
        for (let n = 0; n < t; n++) {
            const t = this.strings[n],
                i = t.lastIndexOf("\x3c!--");
            s = (i > -1 || s) && -1 === t.indexOf("--\x3e", i + 1);
            const r = _.exec(t);
            e += null === r ? t + (s ? a : l) : t.substr(0, r.index) + r[1] + r[2] + h + r[3] + a
        }
        return e += this.strings[t]
    }
    getTemplateElement() {
        const t = document.createElement("template");
        return t.innerHTML = this.getHTML(), t
    }
}
const v = t => null === t || !("object" == typeof t || "function" == typeof t),
    y = t => Array.isArray(t) || !(!t || !t[Symbol.iterator]);
class w {
    constructor(t, e, s) {
        this.dirty = !0, this.element = t, this.name = e, this.strings = s, this.parts = [];
        for (let t = 0; t < s.length - 1; t++) this.parts[t] = this._createPart()
    }
    _createPart() {
        return new S(this)
    }
    _getValue() {
        const t = this.strings,
            e = t.length - 1;
        let s = "";
        for (let n = 0; n < e; n++) {
            s += t[n];
            const e = this.parts[n];
            if (void 0 !== e) {
                const t = e.value;
                if (v(t) || !y(t)) s += "string" == typeof t ? t : String(t);
                else
                    for (const e of t) s += "string" == typeof e ? e : String(e)
            }
        }
        return s += t[e]
    }
    commit() {
        this.dirty && (this.dirty = !1, this.element.setAttribute(this.name, this._getValue()))
    }
}
class S {
    constructor(t) {
        this.value = void 0, this.committer = t
    }
    setValue(t) {
        t === r || v(t) && t === this.value || (this.value = t, s(t) || (this.committer.dirty = !0))
    }
    commit() {
        for (; s(this.value);) {
            const t = this.value;
            this.value = r, t(this)
        }
        this.value !== r && this.committer.commit()
    }
}
class b {
    constructor(t) {
        this.value = void 0, this.__pendingValue = void 0, this.options = t
    }
    appendInto(t) {
        this.startNode = t.appendChild(m()), this.endNode = t.appendChild(m())
    }
    insertAfterNode(t) {
        this.startNode = t, this.endNode = t.nextSibling
    }
    appendIntoPart(t) {
        t.__insert(this.startNode = m()), t.__insert(this.endNode = m())
    }
    insertAfterPart(t) {
        t.__insert(this.startNode = m()), this.endNode = t.endNode, t.endNode = this.startNode
    }
    setValue(t) {
        this.__pendingValue = t
    }
    commit() {
        for (; s(this.__pendingValue);) {
            const t = this.__pendingValue;
            this.__pendingValue = r, t(this)
        }
        const t = this.__pendingValue;
        t !== r && (v(t) ? t !== this.value && this.__commitText(t) : t instanceof g ? this.__commitTemplateResult(t) : t instanceof Node ? this.__commitNode(t) : y(t) ? this.__commitIterable(t) : t === o ? (this.value = o, this.clear()) : this.__commitText(t))
    }
    __insert(t) {
        this.endNode.parentNode.insertBefore(t, this.endNode)
    }
    __commitNode(t) {
        this.value !== t && (this.clear(), this.__insert(t), this.value = t)
    }
    __commitText(t) {
        const e = this.startNode.nextSibling;
        t = null == t ? "" : t, e === this.endNode.previousSibling && 3 === e.nodeType ? e.data = t : this.__commitNode(document.createTextNode("string" == typeof t ? t : String(t))), this.value = t
    }
    __commitTemplateResult(t) {
        const e = this.options.templateFactory(t);
        if (this.value instanceof f && this.value.template === e) this.value.update(t.values);
        else {
            const s = new f(e, t.processor, this.options),
                n = s._clone();
            s.update(t.values), this.__commitNode(n), this.value = s
        }
    }
    __commitIterable(t) {
        Array.isArray(this.value) || (this.value = [], this.clear());
        const e = this.value;
        let s, n = 0;
        for (const i of t) void 0 === (s = e[n]) && (s = new b(this.options), e.push(s), 0 === n ? s.appendIntoPart(this) : s.insertAfterPart(e[n - 1])), s.setValue(i), s.commit(), n++;
        n < e.length && (e.length = n, this.clear(s && s.endNode))
    }
    clear() {
        let t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : this.startNode;
        i(this.startNode.parentNode, t.nextSibling, this.endNode)
    }
}
class x {
    constructor(t, e, s) {
        if (this.value = void 0, this.__pendingValue = void 0, 2 !== s.length || "" !== s[0] || "" !== s[1]) throw new Error("Boolean attributes can only contain a single expression");
        this.element = t, this.name = e, this.strings = s
    }
    setValue(t) {
        this.__pendingValue = t
    }
    commit() {
        for (; s(this.__pendingValue);) {
            const t = this.__pendingValue;
            this.__pendingValue = r, t(this)
        }
        if (this.__pendingValue === r) return;
        const t = !!this.__pendingValue;
        this.value !== t && (t ? this.element.setAttribute(this.name, "") : this.element.removeAttribute(this.name), this.value = t), this.__pendingValue = r
    }
}
class P extends w {
    constructor(t, e, s) {
        super(t, e, s), this.single = 2 === s.length && "" === s[0] && "" === s[1]
    }
    _createPart() {
        return new C(this)
    }
    _getValue() {
        return this.single ? this.parts[0].value : super._getValue()
    }
    commit() {
        this.dirty && (this.dirty = !1, this.element[this.name] = this._getValue())
    }
}
class C extends S {}
let N = !1;
try {
    const t = {get capture() {
            return N = !0, !1
        }
    };
    window.addEventListener("test", t, t), window.removeEventListener("test", t, t)
} catch (t) {}
class A {
    constructor(t, e, s) {
        this.value = void 0, this.__pendingValue = void 0, this.element = t, this.eventName = e, this.eventContext = s, this.__boundHandleEvent = (t => this.handleEvent(t))
    }
    setValue(t) {
        this.__pendingValue = t
    }
    commit() {
        for (; s(this.__pendingValue);) {
            const t = this.__pendingValue;
            this.__pendingValue = r, t(this)
        }
        if (this.__pendingValue === r) return;
        const t = this.__pendingValue,
            e = this.value,
            n = null == t || null != e && (t.capture !== e.capture || t.once !== e.once || t.passive !== e.passive),
            i = null != t && (null == e || n);
        n && this.element.removeEventListener(this.eventName, this.__boundHandleEvent, this.__options), i && (this.__options = E(t), this.element.addEventListener(this.eventName, this.__boundHandleEvent, this.__options)), this.value = t, this.__pendingValue = r
    }
    handleEvent(t) {
        "function" == typeof this.value ? this.value.call(this.eventContext || this.element, t) : this.value.handleEvent(t)
    }
}
const E = t => t && (N ? {
    capture: t.capture,
    passive: t.passive,
    once: t.once
} : t.capture);
const T = new class {
    handleAttributeExpressions(t, e, s, n) {
        const i = e[0];
        return "." === i ? new P(t, e.slice(1), s).parts : "@" === i ? [new A(t, e.slice(1), n.eventContext)] : "?" === i ? [new x(t, e.slice(1), s)] : new w(t, e, s).parts
    }
    handleTextExpression(t) {
        return new b(t)
    }
};

function V(t) {
    let e = O.get(t.type);
    void 0 === e && (e = {
        stringsArray: new WeakMap,
        keyString: new Map
    }, O.set(t.type, e));
    let s = e.stringsArray.get(t.strings);
    if (void 0 !== s) return s;
    const n = t.strings.join(a);
    return void 0 === (s = e.keyString.get(n)) && (s = new d(t, t.getTemplateElement()), e.keyString.set(n, s)), e.stringsArray.set(t.strings, s), s
}
const O = new Map,
    L = new WeakMap;
(window.litHtmlVersions || (window.litHtmlVersions = [])).push("1.0.0");
const M = function(t) {
        for (var e = arguments.length, s = new Array(e > 1 ? e - 1 : 0), n = 1; n < e; n++) s[n - 1] = arguments[n];
        return new g(t, s, "html", T)
    },
    k = 133;

function z(t, e) {
    const s = t.element.content,
        n = t.parts,
        i = document.createTreeWalker(s, k, null, !1);
    let r = F(n),
        o = n[r],
        a = -1,
        l = 0;
    const c = [];
    let h = null;
    for (; i.nextNode();) {
        a++;
        const t = i.currentNode;
        for (t.previousSibling === h && (h = null), e.has(t) && (c.push(t), null === h && (h = t)), null !== h && l++; void 0 !== o && o.index === a;) o.index = null !== h ? -1 : o.index - l, o = n[r = F(n, r)]
    }
    c.forEach(t => t.parentNode.removeChild(t))
}
const R = t => {
        let e = 11 === t.nodeType ? 0 : 1;
        const s = document.createTreeWalker(t, k, null, !1);
        for (; s.nextNode();) e++;
        return e
    },
    F = function(t) {
        for (let e = (arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : -1) + 1; e < t.length; e++) {
            const s = t[e];
            if (u(s)) return e
        }
        return -1
    };
const U = (t, e) => "".concat(t, "--").concat(e);
let j = !0;
void 0 === window.ShadyCSS ? j = !1 : void 0 === window.ShadyCSS.prepareTemplateDom && (console.warn("Обновите страницу...."), j = !1);
const q = t => e => {
        const s = U(e.type, t);
        let n = O.get(s);
        void 0 === n && (n = {
            stringsArray: new WeakMap,
            keyString: new Map
        }, O.set(s, n));
        let i = n.stringsArray.get(e.strings);
        if (void 0 !== i) return i;
        const r = e.strings.join(a);
        if (void 0 === (i = n.keyString.get(r))) {
            const s = e.getTemplateElement();
            j && window.ShadyCSS.prepareTemplateDom(s, t), i = new d(e, s), n.keyString.set(r, i)
        }
        return n.stringsArray.set(e.strings, i), i
    },
    D = ["html", "svg"],
    H = new Set,
    B = (t, e, s) => {
        H.add(s);
        const n = t.querySelectorAll("style"),
            i = n.length;
        if (0 === i) return void window.ShadyCSS.prepareTemplateStyles(e.element, s);
        const r = document.createElement("style");
        for (let t = 0; t < i; t++) {
            const e = n[t];
            e.parentNode.removeChild(e), r.textContent += e.textContent
        }(t => {
            D.forEach(e => {
                const s = O.get(U(e, t));
                void 0 !== s && s.keyString.forEach(t => {
                    const e = t.element.content,
                        s = new Set;
                    Array.from(e.querySelectorAll("style")).forEach(t => {
                        s.add(t)
                    }), z(t, s)
                })
            })
        })(s);
        const o = e.element.content;
        ! function(t, e) {
            let s = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
            const n = t.element.content,
                i = t.parts;
            if (null == s) return void n.appendChild(e);
            const r = document.createTreeWalker(n, k, null, !1);
            let o = F(i),
                a = 0,
                l = -1;
            for (; r.nextNode();)
                for (l++, r.currentNode === s && (a = R(e), s.parentNode.insertBefore(e, s)); - 1 !== o && i[o].index === l;) {
                    if (a > 0) {
                        for (; - 1 !== o;) i[o].index += a, o = F(i, o);
                        return
                    }
                    o = F(i, o)
                }
        }(e, r, o.firstChild), window.ShadyCSS.prepareTemplateStyles(e.element, s);
        const a = o.querySelector("style");
        if (window.ShadyCSS.nativeShadow && null !== a) t.insertBefore(a.cloneNode(!0), t.firstChild);
        else {
            o.insertBefore(r, o.firstChild);
            const t = new Set;
            t.add(r), z(e, t)
        }
    };
window.JSCompiler_renameProperty = ((t, e) => t);
const I = {
        toAttribute(t, e) {
            switch (e) {
                case Boolean:
                    return t ? "" : null;
                case Object:
                case Array:
                    return null == t ? t : JSON.stringify(t)
            }
            return t
        }, fromAttribute(t, e) {
            switch (e) {
                case Boolean:
                    return null !== t;
                case Number:
                    return null === t ? null : Number(t);
                case Object:
                case Array:
                    return JSON.parse(t)
            }
            return t
        }
    },
    W = (t, e) => e !== t && (e == e || t == t),
    J = {
        attribute: !0,
        type: String,
        converter: I,
        reflect: !1,
        hasChanged: W
    },
    $ = Promise.resolve(!0),
    Y = 1,
    G = 4,
    K = 8,
    Q = 16,
    X = 32;
class Z extends HTMLElement {
    constructor() {
        super(), this._updateState = 0, this._instanceProperties = void 0, this._updatePromise = $, this._hasConnectedResolver = void 0, this._changedProperties = new Map, this._reflectingProperties = void 0, this.initialize()
    }
    static get observedAttributes() {
        this.finalize();
        const t = [];
        return this._classProperties.forEach((e, s) => {
            const n = this._attributeNameForProperty(s, e);
            void 0 !== n && (this._attributeToPropertyMap.set(n, s), t.push(n))
        }), t
    }
    static _ensureClassProperties() {
        if (!this.hasOwnProperty(JSCompiler_renameProperty("_classProperties", this))) {
            this._classProperties = new Map;
            const t = Object.getPrototypeOf(this)._classProperties;
            void 0 !== t && t.forEach((t, e) => this._classProperties.set(e, t))
        }
    }
    static createProperty(t) {
        let e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : J;
        if (this._ensureClassProperties(), this._classProperties.set(t, e), e.noAccessor || this.prototype.hasOwnProperty(t)) return;
        const s = "symbol" == typeof t ? Symbol() : "__".concat(t);
        Object.defineProperty(this.prototype, t, {
            get() {
                return this[s]
            }, set(e) {
                const n = this[t];
                this[s] = e, this._requestUpdate(t, n)
            }, configurable: !0, enumerable: !0
        })
    }
    static finalize() {
        if (this.hasOwnProperty(JSCompiler_renameProperty("finalized", this)) && this.finalized) return;
        const t = Object.getPrototypeOf(this);
        if ("function" == typeof t.finalize && t.finalize(), this.finalized = !0, this._ensureClassProperties(), this._attributeToPropertyMap = new Map, this.hasOwnProperty(JSCompiler_renameProperty("properties", this))) {
            const t = this.properties,
                e = [...Object.getOwnPropertyNames(t), ...
                    "function" == typeof Object.getOwnPropertySymbols ? Object.getOwnPropertySymbols(t) : []
                ];
            for (const s of e) this.createProperty(s, t[s])
        }
    }
    static _attributeNameForProperty(t, e) {
        const s = e.attribute;
        return !1 === s ? void 0 : "string" == typeof s ? s : "string" == typeof t ? t.toLowerCase() : void 0
    }
    static _valueHasChanged(t, e) {
        return (arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : W)(t, e)
    }
    static _propertyValueFromAttribute(t, e) {
        const s = e.type,
            n = e.converter || I,
            i = "function" == typeof n ? n : n.fromAttribute;
        return i ? i(t, s) : t
    }
    static _propertyValueToAttribute(t, e) {
        if (void 0 === e.reflect) return;
        const s = e.type,
            n = e.converter;
        return (n && n.toAttribute || I.toAttribute)(t, s)
    }
    initialize() {
        this._saveInstanceProperties(), this._requestUpdate()
    }
    _saveInstanceProperties() {
        this.constructor._classProperties.forEach((t, e) => {
            if (this.hasOwnProperty(e)) {
                const t = this[e];
                delete this[e], this._instanceProperties || (this._instanceProperties = new Map), this._instanceProperties.set(e, t)
            }
        })
    }
    _applyInstanceProperties() {
        this._instanceProperties.forEach((t, e) => this[e] = t), this._instanceProperties = void 0
    }
    connectedCallback() {
        this._updateState = this._updateState | X, this._hasConnectedResolver && (this._hasConnectedResolver(), this._hasConnectedResolver = void 0)
    }
    disconnectedCallback() {}
    attributeChangedCallback(t, e, s) {
        e !== s && this._attributeToProperty(t, s)
    }
    _propertyToAttribute(t, e) {
        let s = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : J;
        const n = this.constructor,
            i = n._attributeNameForProperty(t, s);
        if (void 0 !== i) {
            const t = n._propertyValueToAttribute(e, s);
            if (void 0 === t) return;
            this._updateState = this._updateState | K, null == t ? this.removeAttribute(i) : this.setAttribute(i, t), this._updateState = this._updateState & ~K
        }
    }
    _attributeToProperty(t, e) {
        if (this._updateState & K) return;
        const s = this.constructor,
            n = s._attributeToPropertyMap.get(t);
        if (void 0 !== n) {
            const t = s._classProperties.get(n) || J;
            this._updateState = this._updateState | Q, this[n] = s._propertyValueFromAttribute(e, t), this._updateState = this._updateState & ~Q
        }
    }
    _requestUpdate(t, e) {
        let s = !0;
        if (void 0 !== t) {
            const n = this.constructor,
                i = n._classProperties.get(t) || J;
            n._valueHasChanged(this[t], e, i.hasChanged) ? (this._changedProperties.has(t) || this._changedProperties.set(t, e), !0 !== i.reflect || this._updateState & Q || (void 0 === this._reflectingProperties && (this._reflectingProperties = new Map), this._reflectingProperties.set(t, i))) : s = !1
        }!this._hasRequestedUpdate && s && this._enqueueUpdate()
    }
    requestUpdate(t, e) {
        return this._requestUpdate(t, e), this.updateComplete
    }
    async _enqueueUpdate() {
        let t, e;
        this._updateState = this._updateState | G;
        const s = this._updatePromise;
        this._updatePromise = new Promise((s, n) => {
            t = s, e = n
        });
        try {
            await s
        } catch (t) {}
        this._hasConnected || await new Promise(t => this._hasConnectedResolver = t);
        try {
            const t = this.performUpdate();
            null != t && await t
        } catch (t) {
            e(t)
        }
        t(!this._hasRequestedUpdate)
    }
    get _hasConnected() {
        return this._updateState & X
    }
    get _hasRequestedUpdate() {
        return this._updateState & G
    }
    get hasUpdated() {
        return this._updateState & Y
    }
    performUpdate() {
        this._instanceProperties && this._applyInstanceProperties();
        let t = !1;
        const e = this._changedProperties;
        try {
            (t = this.shouldUpdate(e)) && this.update(e)
        } catch (e) {
            throw t = !1, e
        } finally {
            this._markUpdated()
        }
        t && (this._updateState & Y || (this._updateState = this._updateState | Y, this.firstUpdated(e)), this.updated(e))
    }
    _markUpdated() {
        this._changedProperties = new Map, this._updateState = this._updateState & ~G
    }
    get updateComplete() {
        return this._updatePromise
    }
    shouldUpdate(t) {
        return !0
    }
    update(t) {
        void 0 !== this._reflectingProperties && this._reflectingProperties.size > 0 && (this._reflectingProperties.forEach((t, e) => this._propertyToAttribute(e, this[e], t)), this._reflectingProperties = void 0)
    }
    updated(t) {}
    firstUpdated(t) {}
}
Z.finalized = !0;
const tt = "adoptedStyleSheets" in Document.prototype && "replace" in CSSStyleSheet.prototype;
(window.litElementVersions || (window.litElementVersions = [])).push("2.0.1");
const et = t => t.flat ? t.flat(1 / 0) : function t(e) {
    let s = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : [];
    for (let n = 0, i = e.length; n < i; n++) {
        const i = e[n];
        Array.isArray(i) ? t(i, s) : s.push(i)
    }
    return s
}(t);
class st extends Z {
    static finalize() {
        super.finalize(), this._styles = this.hasOwnProperty(JSCompiler_renameProperty("styles", this)) ? this._getUniqueStyles() : this._styles || []
    }
    static _getUniqueStyles() {
        const t = this.styles,
            e = [];
        if (Array.isArray(t)) {
            et(t).reduceRight((t, e) => (t.add(e), t), new Set).forEach(t => e.unshift(t))
        } else t && e.push(t);
        return e
    }
    initialize() {
        super.initialize(), this.renderRoot = this.createRenderRoot(), window.ShadowRoot && this.renderRoot instanceof window.ShadowRoot && this.adoptStyles()
    }
    createRenderRoot() {
        return this.attachShadow({
            mode: "open"
        })
    }
    adoptStyles() {
        const t = this.constructor._styles;
        0 !== t.length && (void 0 === window.ShadyCSS || window.ShadyCSS.nativeShadow ? tt ? this.renderRoot.adoptedStyleSheets = t.map(t => t.styleSheet) : this._needsShimAdoptedStyleSheets = !0 : window.ShadyCSS.ScopingShim.prepareAdoptedCssText(t.map(t => t.cssText), this.localName))
    }
    connectedCallback() {
        super.connectedCallback(), this.hasUpdated && void 0 !== window.ShadyCSS && window.ShadyCSS.styleElement(this)
    }
    update(t) {
        super.update(t);
        const e = this.render();
        e instanceof g && this.constructor.render(e, this.renderRoot, {
            scopeName: this.localName,
            eventContext: this
        }), this._needsShimAdoptedStyleSheets && (this._needsShimAdoptedStyleSheets = !1, this.constructor._styles.forEach(t => {
            const e = document.createElement("style");
            e.textContent = t.cssText, this.renderRoot.appendChild(e)
        }))
    }
    render() {}
}

function nt() {
    const e = t(["<span>", "</span>"]);
    return nt = function() {
        return e
    }, e
}

function it() {
    const e = t(["", ""]);
    return it = function() {
        return e
    }, e
}

function rt() {
    const e = t(["", ""]);
    return rt = function() {
        return e
    }, e
}
st.finalized = !0, st.render = ((t, e, s) => {
    const n = s.scopeName,
        r = L.has(e),
        o = j && 11 === e.nodeType && !!e.host && t instanceof g,
        a = o && !H.has(n),
        l = a ? document.createDocumentFragment() : e;
    if (((t, e, s) => {
            let n = L.get(e);
            void 0 === n && (i(e, e.firstChild), L.set(e, n = new b(Object.assign({
                templateFactory: V
            }, s))), n.appendInto(e)), n.setValue(t), n.commit()
        })(t, l, Object.assign({
            templateFactory: q(n)
        }, s)), a) {
        const t = L.get(l);
        L.delete(l), t.value instanceof f && B(l, t.value.template, n), i(e, e.firstChild), e.appendChild(l), L.set(e, t)
    }!r && o && window.ShadyCSS.styleElement(e.host)
});
class ot extends st {
    static get properties() {
        return {
            path: {
                type: String
            },
            placeholder: {
                type: Boolean
            },
            lazy: {
                type: Boolean
            },
            "class-name": {
                type: String
            },
            svgDOM: {
                type: String
            },
            loadingLabel: {
                type: String
            }
        }
    }
    createRenderRoot() {
        return this
    }
    extractClassNames(t) {
        let e = t;
        t.match(/<svg[\w\s\t\n:="\\'\/.#-]+ class="(.*?)"/) || (e = t.replace(/(<svg[\w\s\t\n:="\\'\/.#-]+)/, '$1 class=" "'));
        const s = [...e.match(/<svg[\w\s\t\n:="\\'\/.#-]+ class="(.*?)"/) && e.match(/class="(.*?)"/)[1].split(" "), ...this["class-name"] && this["class-name"].split(" ") || []].filter(t => t),
            n = [...new Set(s)].join(" ");
        return e.replace(/(<svg[\w\s\t\n:="\\'\/.#-]+) class="[\w\s-_]+?"/, '$1 class="'.concat(n, '"'))
    }
    static clean(t) {
        return t.replace(/<!--[\s\w"-\/:=?><]+-->/g, "")
    }
    static parse(t) {
        const e = (new DOMParser).parseFromString(t, "text/html");
        return console.log("parsedHtml ", e), e.body.firstChild
    }
    static async fetchFile(t) {
        try {
            return await(await fetch(t)).text()
        } catch (t) {
            return new Error(t)
        }
    }
    svg() {
        return ot.fetchFile(this.path).then(t => {
            let e = t;
            e = this.extractClassNames(e), this.svgDOM = e
        })
    }
    updated(t) {
        return t.has("path") ? (this.removeListeners(), this.init()) : t.has("className") && this.svgDOM && (this.svgDOM = this.extractClassNames(this.svgDOM)), !1
    }
    addListeners() {
        window.addEventListener("scroll", this.callFunction), window.addEventListener("resize", this.callFunction), window.addEventListener("orientationchange", this.callFunction)
    }
    removeListeners() {
        window.removeEventListener("scroll", this.callFunction), window.removeEventListener("resize", this.callFunction), window.removeEventListener("orientationchange", this.callFunction)
    }
    init() {
        return this.lazy ? (this.addListeners(), this.lazyLoad()) : this.svg()
    }
    connectedCallback() {
        super.connectedCallback(), this.path && this.init()
    }
    disconnectedCallback() {
        super.disconnectedCallback(), this.removeListeners()
    }
    constructor() {
        super(), this.lazyLoad = (() => {
            if (this.offsetTop < window.innerHeight + window.pageYOffset + 300) return this.removeListeners(), this.svg()
        }), this.loadingLabel = "Loading...", this.callFunction = function(t, e, s, n) {
            var i, r = !1,
                o = 0;

            function a() {
                i && clearTimeout(i)
            }

            function l() {
                var l = this,
                    c = Date.now() - o,
                    h = arguments;

                function d() {
                    o = Date.now(), s.apply(l, h)
                }
                r || (n && !i && d(), a(), void 0 === n && c > t ? d() : !0 !== e && (i = setTimeout(n ? function() {
                    i = void 0
                } : d, void 0 === n ? t - c : t)))
            }
            return "boolean" != typeof e && (n = s, s = e, e = void 0), l.cancel = function() {
                a(), r = !0
            }, l
        }(400, this.lazyLoad)
    }
    render() {
        return M(rt(), this.svgDOM ? M(it(), ot.parse(this.svgDOM)) : M(nt(), this.loadingLabel))
    }
}
window.customElements.define("svg-to-inline", ot);
//# sourceMappingURL=svg-to-inline.js.map