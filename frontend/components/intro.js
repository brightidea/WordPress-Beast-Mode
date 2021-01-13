import { CMS_NAME, CMS_URL } from '../lib/constants'
import { motion } from "framer-motion"

export default function Intro() {
  return (
    <section className="flex-col md:flex-row flex items-center md:justify-between mt-16 mb-16 md:mb-12">
      <motion.h1
        initial={{ scale: 0.6, opacity: 0 }}
        animate={{ scale: 1, opacity: 1 }}
        className="text-6xl md:text-6xl font-bold tracking-tighter leading-tight md:pr-8"
        layoutId="title"
      >
      WPBeastMode
      </motion.h1>

      <motion.h4 
        initial={{ scale: 0.6, opacity: 0 }}
        animate={{ scale: 1, opacity: 1 }}
        className="text-center md:text-left text-lg mt-5 md:pl-8">

        A statically generated blog example using{' '}
        <a
          href="https://nextjs.org/"
          className="underline hover:text-success duration-200 transition-colors"
        >
          Next.js
        </a>{' '}
        and{' '}
        <a
          href={CMS_URL}
          className="underline hover:text-success duration-200 transition-colors"
        >
          {CMS_NAME}
        </a>
        .
      </motion.h4>
    </section>
  )
}
